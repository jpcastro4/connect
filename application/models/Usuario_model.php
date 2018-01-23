<?php
use Aws\Sns;
use Aws\Sns\SnsClient;
use Aws\AwsClientInterface;
use Aws\AwsClientTrait;

class Usuario_model extends CI_Model{

    public function __construct(){
        parent::__construct();

        $this->load->model('backoffice_model', 'backoffice');
    }


    public function validaPhone(){
        $usuarioTelefone = preg_replace("/\(|\)|\-/", "", $this->input->post('usuarioTelefone'));

        if( substr($usuarioTelefone,0,1) == 0 ){
            $usuarioTelefone = substr($usuarioTelefone, 1);
        }
        if( strlen($usuarioTelefone) < 10   OR  strlen($usuarioTelefone) > 11  ){
            echo json_encode( array('result'=>'error','message'=>'Número incorreto '. strlen($usuarioTelefone)) );
            return;
        }

        $this->db->where('usuarioTelefone',$usuarioTelefone);
        $return = $this->db->get('usuarios');

        if($return->num_rows() > 0){
            echo json_encode( array('result'=>'error','message'=>'Já existe membro com esse número') );
            return;
        }

        $this->native_session->set('telefone',$usuarioTelefone);

        $code = (string) rand(1001,9999);
        $this->native_session->set('code',$code);
       
        $send = $this->codeCadastro($code,$usuarioTelefone);
        
        if($send){
            echo json_encode( array('result'=>'success','message'=>'Vamos redirecionar você.','redirect'=>base_url('valida')) );
            return;
        }

        echo json_encode( array('result'=>'error','message'=>'Envie novamente') );
        return;
    }

    public function codeCadastro($cod,$phone){

         //envia mensagem para o celular com o codigo retornado pelo AWS SNS
        try{

            $client = SnsClient::factory(array(
            'region' => 'us-east-1',
            'version' => 'latest',
            'credentials' => array(
                'key'    =>  $this->config->item('aws_key'),
                'secret' => $this->config->item('aws_secret')
                )
            ));

            //Mensagem em massa para todos do topico
 
            // $payload = [
            // 'TopicArn' => 'arn:aws:sns:us-east-1:630580470294:connectmoney',
            //     'Message'          => 'Seu codigo de validação da conta Connect Money: '.$message,
            //     'MessageStructure' => 'string',
            //     'MessageAttribute' => [
            //         'AWS.SNS.SMS.SenderID' => [
            //             'DataType'    => 'String',
            //             'StringValue' => 'Sender',
            //         ],
            //         'AWS.SNS.SMS.SMSType'  => [
            //             'DataType'    => 'String',
            //             'StringValue' => 'Transactional',
            //         ]
            //     ]
            // ];

            $message = [
                'Message' => 'Seu codigo de validação da conta Connect Money: '. $cod,
                'MessageAttributes' => [
                    'AWS.SNS.SMS.SenderID' => [
                        'DataType'    => 'String',
                        'StringValue' => 'Sender',
                    ],
                    'AWS.SNS.SMS.SMSType'  => [
                        'DataType'    => 'String',
                        'StringValue' => 'Transactional',
                    ]
                ],
                'MessageStructure' => 'string',
                'PhoneNumber' => (string) '+55'.$phone,
                'Subject' => 'Codigo de validação',
                // 'TargetArn' => '<string>',
                // 'TopicArn' => '<string>',
            ];

            //Inscreve o usuario no topico
            $result = $client->subscribe(array(
                'TopicArn' => 'arn:aws:sns:us-east-1:630580470294:connectmoney',
                'Protocol' => 'sms',
                'Endpoint' => (string) '+55'.$phone,
            ));
        
            // $subarn = $result['SubscriptionArn']; //retorno da identificação do usuario na lista
            $client->publish($message);

            return true;

        }catch(AwsException $e){

            return false;
        }
           
        //Desinscrever         
        //  $result = $client->unsubscribe(array(
        //     'SubscriptionArn' => $subarn,
        //  ));
    }

    public function validaCode(){

        if($this->input->post('usuarioCode') != $this->native_session->get('code') ){
            echo json_encode(array('result'=>'error','message'=>'Código não confere'));
            return;
        }

        echo json_encode(array('result'=>'success','message'=>'Sucesso. Vamos proseguir','redirect'=>base_url("finaliza")));
    }



    public function concluiConta(){

        $usuarioEmail = $this->input->post('usuarioEmail');
        $usuarioSenha = $this->input->post('usuarioSenha');
        //$usuarioLogin = $this->input->post('usuarioLogin');

        $usuarioNome = $this->input->post('usuarioNome');
        $usuarioSobrenome = $this->input->post('usuarioSobrenome'); 
        //$usuarioCpf =  preg_replace("/\.|\-/", "", $this->input->post('usuarioCpf') ); 

        //$nascimento = $this->input->post('nascimento');
        // $celular = preg_replace("/\(|\)|\-/", "", $this->input->post('celular'));
        // $ddd = substr($celular, 0, 2);
        // $tel = substr($celular, 2, 10);
        
        $usuarioTelefone = $this->native_session->get('telefone');      

        if( empty($usuarioSenha)  OR empty($this->input->post('repeteSenha')) ){
            echo json_encode( array('result'=>'error','message'=>'Campos vazios.') );
            return;
        }

        if( $this->input->post('usuarioSenha')  != $this->input->post('repeteSenha') ){
            echo json_encode( array('result'=>'error','message'=>'Senha não confere.') );
            return;
        }

        if($this->native_session->get('indicador')){
            $indicadorLogin = $this->native_session->get('indicador');

            $this->db->where('usuarioLogin', $indicadorLogin);
            $indicador = $this->db->get('usuarios');

            if($indicador->num_rows() > 0){

                if( $indicador->row()->usuarioBlock == 1){
                    $indicadorID = null;

                }elseif($indicador->row()->usuarioStatus == 0){
                     $indicadorID = null;

                }else{
                   $indicadorID = $indicador->row()->usuarioID;
                }                
            }

        }else{

            $indicadorID = null; //especificamente para o primeiro cadastro
        }
        
        //LOGIN JA EXISTENTE
        // $this->db->where('usuarioLogin', $usuarioLogin);
        // $user_usuarioLogin = $this->db->get('usuarios');

        // if($user_usuarioLogin->num_rows() > 0){

        //     //$this->native_session->set_flashdata('mensagem',  '<div class="alert alert-danger text-center">Login já existe. Escolha outro.</div>');
        //     echo json_encode( array('result'=>'error','message'=>'NickName já existe. Escolha outro.') );
        //     return;
        // }

        //USUARIOS QUE JA EXISTEM
        //$this->db->where('usuarioCpf', $usuarioCpf);
        $this->db->where( array('usuarioTelefone'=> $usuarioTelefone,'usuarioSenha'=>md5($usuarioSenha) ));
        $this->db->or_where('usuarioEmail', $usuarioEmail);
        $indicadorDados = $this->db->get('usuarios');

        if( $indicadorDados->num_rows() > 0){

            echo json_encode( array('result'=>'error','message'=>'Você já está cadastrado') );
            return;
        }

        $usuarioGuid = (string) uniqid();
        
        $array_cadastro = array(
            'usuarioLogin'=>$usuarioGuid,
            'usuarioNome'=>$usuarioNome,
            //'usuarioCod'=>$cod,
            'usuarioSobrenome'=>$usuarioSobrenome,
            'usuarioEmail'=>$usuarioEmail,
            //'usuarioCpf'=>$usuarioCpf,
            //'nascimento'=>converter_data($nascimento),
            'usuarioTelefone'=>$usuarioTelefone,
            'usuarioSenha'=>md5($usuarioSenha),
            'usuarioBlock'=>0,
            'usuarioStatus'=>0,
            'usuarioDataCadastro'=>date('Y-m-d H:i:s'),
            'usuarioIndicador'=>$indicadorID,
        );

        $cadastra = $this->db->insert('usuarios', $array_cadastro);

        if($cadastra){
            $this->native_session->unset_userdata('telefone');
            $id_novo_usuario = $this->db->insert_id();
            //$this->native_session->set('usuario_id', $id_novo_usuario);

        }else{

            echo json_encode( array('result'=>'error','message'=>'Cadastrou falhou. Tente novamente') );
            return;
        }


        //REDIRECIONA PARA A TELA DE PAGAMENTO

        //if($this->codeCadastro($id_novo_usuario,$cod,$usuarioTelefone)){
            
        echo json_encode( array('result'=>'success','message'=>'Parabéns. Cadastro efetuado.','redirect'=>'backoffice/login') );
        return;

        //}
        //$pacoteID = $this->native_session->get('pacoteID');
        // if($pagamento){
        //     $infoCadastrado = $this->painel_model->infoUser($id_novo_usuario);
        //     $nomeCadastrado = $infoCadastrado->nome;
        //     $this->painel_model->InserirExtrato($id_indicador, 'indicou o amigo '.$nomeCadastrado.' #'.$id_novo_usuario , 'novoinidcado');

        //     $this->native_session->set_flashdata('mensagem','<div class="alert alert-success text-center" >Usuário cadastrado com sucesso <a href="'. base_url('').'"><strong> Clique aqui e faça o login</strong></a></div>');            
        // }
        
    }


    // public function processaPagamento(){
        
    //     $post = $this->input->post();

    //     $pacoteID = $post['pacoteID'];
    //     $usuarioID = $post['usuarioID'];

    //     //consulta se há algum pedido aguardando em nome do usuario
    //     $this->db->where('usuarioID',$usuarioID);
    //     $this->db->where('pedidoStatus',1);
    //     $pedidoAberto = $this->db->get('pedidos');

    //     if($pedidoAberto->num_rows() > 0 ){

    //         echo json_encode(array('return'=>FALSE,'message'=>'Existe pedido de pacote aguardando aprovação.'));
    //         return;
    //     }


    //     $secret = 'ZzsMLGKe162CfA5EcG6j@';
    //     $pedidoKey = md5(date('Y-m-d H:i:s').$post['usuarioID'].$secret);
    //     $my_xpub = 'xpub6CiWQwtbo6sY7WvakAZj5nperxTTHfRSLL9ZkAqZuUvY2VF8sYk8sqGnnBpkLDxXS7CXxKA7U77SDj7opLkeyGGfXAo1HvLdZ3GJGZMRLXy';
    //     $my_api_key = '{YOUR API KEY}';


    //     //abrindo pedido no sistema
    //     $pedidoAbrir = array(
    //         'pacoteID'=>$pacoteID,
    //         'usuarioID'=>$usuarioID,
    //         'pedidoStatus'=>1,// 0 para cancelado, 1 para aguardando, 2 para aprovado,
    //         'pedidoKey'=>$pedidoKey
    //     );
    //     $this->db->insert('pedidos', $pedidoAbrir);
    //     $novoPedidoID = $this->db->insert_id();
        
    //     //abrindo endereço na blockchain
    //     $my_callback_url = site_url().$novoPedidoID.'/'.$pedidoKey;

    //     // $root_url = 'https://api.blockchain.info/v2/receive';
    //     // $parameters = 'xpub=' .$my_xpub. '&callback=' .urlencode($my_callback_url). '&key=' .$my_api_key;
    //     // $response = file_get_contents($root_url . '?' . $parameters);
    //     //$object = json_decode($response);

    //     $address = 'ficticio';

    //     $this->db->where('pedidoID',$novoPedidoID);
    //     $this->db->update('pedidos', array('pedidoEndWallet'=>$address) );

    //     echo json_encode(array('return'=>TRUE,'message'=>'Pedido realizado.'));
    //     return;

    //     //redirect('pagamento/'.$novoPedidoID);
    // }

    // public function returnPagamento(){

    //     //retorna o pagamento da blockchain com o resultado e muda status do usuario e ativa o pacote comprado
    // }
    
    
    public function usuarioLogin(){

        $login = $this->input->post('usuarioLogin');
        $senha = $this->input->post('usuarioSenha');
        
        $this->db->where('usuarioSenha', md5($senha));
        $this->db->where('usuarioEmail', $login);
        $this->db->or_where('usuarioTelefone',$login);
        $usuario = $this->db->get('usuarios');

        if($usuario->num_rows() > 0){

            $row = $usuario->row();

            if($row->usuarioBlock == 0){

                $this->db->where('usuarioID',$row->usuarioID);
                $this->db->update('usuarios',array('usuarioDataUltimoLogin'=>date('Y-m-d H:i:s') ) );

                $this->native_session->set('usuario_id',$row->usuarioID);
                echo json_encode( array('result'=>'success','redirect'=> base_url('backoffice') ) );
                return;              

            }

            echo json_encode( array('result'=>'error','message'=> 'Você está bloqueado' ) );
            return; 

        }

        echo json_encode( array('result'=>'error','message'=> 'Verifique login ou senha' ) );
        return;
    }
    

    public function alteraPerfil(){       
        $user = $this->native_session->get('usuario_id');
        $array = $this->input->post();

        if( array_search(null , $array, false) === true  ){
            echo json_encode(array('result'=>'error','message'=>'Todos os campos são obrigatórios.'));
            return;
        }

        $array['usuarioTelefone'] = preg_replace("/\(|\)|\-/", "", $array['usuarioTelefone']); 
        
        $this->db->where('usuarioID',$user );
        $this->db->update('usuarios', $array );

        echo json_encode(array('result'=>'success','message'=>'Perfil alterado.'));
        return;
    }

    public function alteraSenha(){
        
        if( array_search(null , $this->input->post() , false) === true  ){
            echo json_encode(array('result'=>'error','message'=>'Todos os campos são obrigatórios.'));
            return;
        }

        $novasenha = $this->input->post('usuarioSenha');
        $repete = $this->input->post('repeteSenha');
                
        if($novasenha != $repete ){
            echo json_encode(array('result'=>'error','message'=>'Senhas diferentes.','clear'=>'true') );
            return;
        }

        $user = $this->native_session->get('usuario_id');

        $this->db->where('usuarioID', $user );
        $this->db->update('usuarios', array('usuarioSenha'=>md5($novasenha) ) );

        echo json_encode(array('result'=>'success','message'=>'Senha alterada com sucesso.'));
        return;
    }

    public function picPay(){

        $user = $this->native_session->get('usuario_id');

        if( array_search(null , $this->input->post() , false) === true  ){
            echo json_encode(array('result'=>'error','message'=>'Todos os campos são obrigatórios.'));
            return;
        }

        if(empty($this->input->post())){
            echo json_encode(array('result'=>'error','message'=>'Erro. Tente novamente'));
            return;
        }

        if($this->backoffice->conta()->usuarioSenha != md5($this->input->post('usuarioSenha')) ){
            echo json_encode(array('result'=>'error','message'=>'Verifique sua senha'));
            return;
        }
            
        $this->db->where(array('usuarioID'=>$user ) );
        $update = $this->db->update('usuarios', array('usuarioPicPay'=> $this->input->post('usuarioPicPay') ) );
        if($update){
            echo json_encode(array('result'=>'success','message'=>'PicPay alterado','redirect'=> base_url("backoffice/pagamento") ));
            return;
        }
        echo json_encode(array('result'=>'error','message'=>'Tenta novamente','redirect'=> base_url("backoffice/pagamento") ));
        return;
    }
    
    public function alterarBanco(){

        $user = $this->native_session->get('usuario_id');

        if(empty($this->input->post())){
            echo json_encode(array('result'=>'error','message'=>'Erro. Tente novamente'));
            return;
        }

        $fields = serialize( (object) $this->input->post() );

        if( $this->input->post('bancoID') ){
            
            $this->db->where(array('usuarioID'=>$user,'bancoID'=> $this->input->post('bancoID') ) );
            $conta = $this->db->update('usuarios_bancos', array('banco'=>$fields) );
            echo json_encode(array('result'=>'success','message'=>'Banco alterado'));
            return;

        }else{

            $insert = $this->db->insert('usuarios_bancos', array('idContaUsuario'=>$user,'banco'=>$fields));

            if($insert){
                echo json_encode(array('result'=>'success','message'=>'Banco inserido'));
                return;
            }
        }
    }
 

    public function RecuperarSenhaConta(){

        //$this->load->library('email');

        $email = $this->input->post('email');

        $this->db->where('email', $email);
        $user = $this->db->get('usuarios_contas');

        if($user->num_rows() > 0){

            $row = $user->row();

            $s1 = rand(302, 999);
            $s2 = 'Az-';
            $s3 = rand(10, 55);
            $s4 = 'EyT';

            $nova_senha = $s1.$s2.$s3.$s4;

            $this->db->where('id', $row->id);
            $this->db->update('usuarios_contas', array('senha'=>md5($nova_senha)));

            $data['nome'] = $row->email;
            $data['senha'] = $nova_senha;

            $config['protocol'] ='smtp';
            $config['smtp_host'] = 'srv30.prodns.com.br';
            $config['smtp_user'] = 'suporte@redeads50.com';
            $config['smtp_pass'] = 'ads502016';
            $config['smtp_port'] = '465';
            $config['smtp_crypto'] = 'ssl';
            $config['mailtype'] = 'html';

            $this->email->initialize($config);

            $body = $this->load->view('email/senha',$data,TRUE);

            $this->email->to( $row->email);
            $this->email->from('suporte@redeads50.com', 'Painel Rede ADS50');
            $this->email->set_mailtype('html');
            $this->email->subject('Nova senha da Conta Master - '.$row->email);
            $this->email->message($body);

            $envia = $this->email->send();

            if($envia){

                return '<div class="alert alert-success text-center">Dentro de 5 minutos enviaremos uma nova senha.</div>';
            }

            return '<div class="alert alert-danger text-center">Erro ao enviar nova senha. Tente novamente.</div>';

        }

        return '<div class="alert alert-danger text-center">O login informado não existe.</div>';
    }


    

  
}
