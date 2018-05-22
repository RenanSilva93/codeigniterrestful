<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller {

    function __construct() {
        parent::__construct('login');
        $this->load->model('UsuarioModel', 'UsuarioModel');
        $this->load->model('EventoModel', 'EventoModel');
    }
    
    public function index_get() {
        $eventos = $this->EventoModel->getEventos();
        $data['eventos'] = $eventos;
        $this->load->view('evento/eventoView', $data);
    }
    
    public function index_post() {
        $usuario = $this->post();
        $verificaLogin = $this->UsuarioModel->verificaLogin($usuario);
        $response['message'] = $verificaLogin['message'];

        if ($verificaLogin['status']) {
            $this->response($response, REST_Controller::HTTP_OK);
            $this->index_get();
        } else {
            $this->response($response, REST_Controller::HTTP_BAD_REQUEST);
        }
    }


}
