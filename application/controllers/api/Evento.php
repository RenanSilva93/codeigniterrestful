<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Evento extends REST_Controller {

    function __construct() {
        parent::__construct('evento');
        $this->load->model('EventoModel', 'EventoModel');
    }
    
    public function index_get() {
        $this->load->view('evento/cadastroEventoView');
    }
    
    public function index_post() {
        $evento = $this->post();
        $insert = $this->EventoModel->Insert($evento);
        $response['message'] = $insert['message'];

        if ($insert['status']) {
            //$this->response($response, REST_Controller::HTTP_OK);
            $eventos = $this->EventoModel->getEventos();
            $data['eventos'] = $eventos;
            $this->load->view('evento/eventoView', $data);
        } else {
            $this->response($response, REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}
