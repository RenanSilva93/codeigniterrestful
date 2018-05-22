<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class EventoModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    function Insert($dados) {
        if (!isset($dados)) {
            $response['status'] = false;
            $response['message'] = "Dados não informados.";
        } else {
            $this->form_validation->set_data($dados);
            $this->form_validation->set_rules('titulo', 'Titulo');
            $this->form_validation->set_rules('descricao', 'Descricao');
            $this->form_validation->set_rules('data', 'Data');
            $this->form_validation->set_rules('hora', 'Hora');
            $this->form_validation->set_rules('cep', 'CEP');
            
            $this->load->library('upload');
            $path = 'include/uploads/';
            if (!is_dir($path)) {
                mkdir($path, 0777, $recursive = true);
            }
            $configUpload['upload_path']   = $path;
            $configUpload['allowed_types'] = 'jpg|jpeg|png';
            $this->upload->initialize($configUpload);
            $this->upload->do_upload('foto');
            $dados['foto'] = $this->upload->data('file_name'); 
        
            $cep = $dados['cep'];
            $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
            
            if((string) $reg->resultado == 0) {
                $dados['endereco'] = 'cep errado';
                $dados['bairro'] = 'cep errado';
                $dados['cidade'] = 'cep errado';
                $dados['uf'] = 'cep errado';
            } else {
                $dados['endereco'] = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
                $dados['bairro'] = (string) $reg->bairro;
                $dados['cidade'] = (string) $reg->cidade;
                $dados['uf'] = (string) $reg->uf;
            }
            
            $status = $this->db->insert('evento', $dados);
            // verificamos o status do insert
            if ($status) {
                $response['status'] = true;
                $response['message'] = "Evento inserido com sucesso.";
            } else {
                $response['status'] = false;
                $response['message'] = $this->db->error_message();
            }
        }

        return $response;
    }
    
    function getEventos() {
        $query = $this->db->get_where('evento');
        $resultado = $query->result_array();
        return $resultado;
    }
}

