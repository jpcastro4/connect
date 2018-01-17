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

        $this->usuario->novaConta();
    }

    public function login(){

        $this->usuario->usuarioLogin();
    }

    public function recuperaSenha(){

        $this->usuario->RecuperarSenha();
    }

    public function posiciona(){

        $this->backoffice->posiciona();
    }

    //ADMINISTRATIVO 

    public function pacote($pacoteID=null){

        $this->admin->pacote($pacoteID);
    }

    public function configuracoes(){

        $this->admin->AtualizarConfiguracoes();
    }
 
 
}