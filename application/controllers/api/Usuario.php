<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Usuario extends REST_Controller {

    function __construct() {
        parent::__construct('usuario');
        $this->load->model('UsuarioModel', 'UsuarioModel');
    }
    
    public function index_get() {
        $this->load->view('usuario/cadastroUsuarioView');
    }
    
    public function index_post() {
        $usuario = $this->post();
        $insert = $this->UsuarioModel->Insert($usuario);
        $response['message'] = $insert['message'];

        if ($insert['status']) {
            $this->response($response, REST_Controller::HTTP_OK);
        } else {
            $this->response($response, REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}

