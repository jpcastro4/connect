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

    public function preview(){

        $this->backoffice->RedeDoacoes();
        
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

    //ADMINISTRATIVO 

    public function pacote($pacoteID=null){

        $this->admin->pacote($pacoteID);
    }

    public function configuracoes(){

        $this->admin->AtualizarConfiguracoes();
    }
 
 
}