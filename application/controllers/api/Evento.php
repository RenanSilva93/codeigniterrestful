<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Evento extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('EventoModel', 'EventoModel');
    }
    
    public function index_get() {
        $this->response(array("mensagem" => "O roteamento está funcionando corretamente."), REST_Controller::HTTP_OK);
    }

}
