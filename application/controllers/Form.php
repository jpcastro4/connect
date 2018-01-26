<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('admin_model', 'admin');
        $this->load->model('usuario_model', 'usuario');
        $this->load->model('backoffice_model', 'backoffice');
    }

    public function index(){
        // $this->native_session->unset_userdata('user_id');
        // $this->native_session->unset_userdata('superuser');
        // $this->native_session->unset_userdata('conta_id');
        // $this->native_session->unset_userdata('fb_access_token');
        
        $this->load->view('index/index');
        //echo "Em manutencao";
    }


    public function geneses(){

        $this->backoffice->geneses();
    }
    
    public function rede(){
        dump($this->backoffice->RedeDoacoes());     
    }
    public function rastreador(){
        $this->backoffice->RedeDoacoes();
        dump($this->backoffice->RastreadorRedeDoacoes());     
    }

    public function implantar($posicRecebedorID,$repeat=false){

    }

    //USUARIO
    public function cadastrar(){

        $this->usuario->validaPhone();
    }

    public function valida(){
        $this->usuario->validaCode();
    }

    public function finalizar(){
        $this->usuario->concluiConta();
    }

    public function login(){

        $this->usuario->usuarioLogin();
    }

    public function recuperaSenha(){

        $this->usuario->RecuperarSenha();
    }   

    // public function posiciona(){

    //     $this->backoffice->posiciona();
    // }

    public function perfil(){
        $this->usuario->alteraPerfil();
    }
    
    public function senha(){
        $this->usuario->alteraSenha();
    }

    public function picpay(){

        $this->usuario->picPay();
    }

    public function abrePosicao(){

        $this->backoffice->processarPosicionamento();
    }

    public function comprovante(){
        $this->backoffice->enviarComprovante();
    }

    public function aceitar(){
        $this->backoffice->aceitaDoacao();
    }

    public function rejeitar(){
        $this->backoffice->rejeitaDoacao();
    }

    //ADMINISTRATIVO 

    public function pacote($pacoteID=null){

        $this->admin->pacote($pacoteID);
    }

    public function configuracoes(){

        $this->admin->AtualizarConfiguracoes();
    }

    public function telefone(){
        echo 'joao';
    }

    public function contatos(){

       //set_time_limit(60000);

       $return = $this->db->get('precadastro')->result();

       foreach($return as $i){

            $seg = rand(2,15);
            sleep($seg);
            $this->usuario->subsFone($i->telefone);

            // $telefone = preg_replace("/\(|\)|\-/", "", $i->telefone);
            // $this->db->where('id',$i->id);
            // $this->db->update('precadastro', array('telefone'=>$telefone ));

            // $digito = str_split($telefone);

            // if($digito[0]==0){
            //     $telefone = substr($telefone,1,strlen($telefone));
            //     // $this->db->where('id',$i->id);
            //     // $true = $this->db->update('precadastro', array('telefone'=>$telefone ));
            //     echo $i->nome.' - '.$i->telefone.' - '. $telefone .'</br></br>';
            // }
            // if(strlen($telefone) < 10 ){

            //     // $e = str_split($telefone);
            //     // if($e[2] < 7 ){
                    
            //     //     $ntelefone = $e[0].$e[1].'$'.$e[2].$e[3].$e[4].$e[5].$e[6].$e[7].$e[8].$e[9];
            //         // $this->db->where('id',$i->id);
            //         // $true = $this->db->delete('precadastro');
            //         echo $i->nome.' - '.$i->telefone.' - </br></br>';
            //     // }
                
            // }
       }

        
    
       //dump($return);
       //echo json_encode($return);

    }
 
 
}