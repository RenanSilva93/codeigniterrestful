<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    function Insert($dados) {
        if (!isset($dados)) {
            $response['status'] = false;
            $response['message'] = "Dados não informados.";
        } else {
            $this->form_validation->set_data($dados);
            $this->form_validation->set_rules('nome', 'Nome');
            $this->form_validation->set_rules('email', 'Email');
            $this->form_validation->set_rules('senha', 'Senha');

            $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
            
            $status = $this->db->insert('usuario', $dados);
            // verificamos o status do insert
            if ($status) {
                $response['status'] = true;
                $response['message'] = "Usuário inserido com sucesso.";
            } else {
                $response['status'] = false;
                $response['message'] = $this->db->error_message();
            }
        }

        return $response;
    }
    
    function verificaLogin($dados) {
        if (!isset($dados)) {
            $response['status'] = false;
            $response['message'] = "Dados não informados.";
        } else {
            $this->form_validation->set_data($dados);
            $this->form_validation->set_rules('email', 'Email');
            $this->form_validation->set_rules('senha', 'Senha');
            
            $array = array('email' => $dados['email']);
            $query = $this->db->get_where('usuario', $array);
            $resultado = $query->result();
            
            if(!empty($resultado)){
                $result = $query->row();
                if ($dados['senha'] == password_verify($dados['senha'], $result->senha)) {
                    $status = TRUE;
                } else {
                    $status = FALSE;
                }
            } else {
                $status = FALSE;
            }
           
            if ($status) {
                $response['status'] = true;
                $response['message'] = "Login realizado.";
            } else {
                $response['status'] = false;
                $response['message'] = "Login não realizado.";
            }
        }

        return $response;
    }

}
