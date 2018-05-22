<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');

echo form_open('api/login');
?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="<?php echo base_url() . 'api/usuario'; ?>" class="btn btn-success">Realizar Cadastro</a>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2"></div>
    </div>
    
    <center>
        <h3>Login: </h3>
        <div class="form-inline justify-content-center">
        <label class="col-sm-1">E-mail: </label>
        <div class="col-sm-2"> 
            <input class="form-control" id="email" name="email" type="email" placeholder="Digite seu email"/>
        </div>
        </div><br>

        <div class="form-inline justify-content-center">
        <label class="col-sm-1">Senha: </label>
        <div class="col-sm-2">
            <input class="form-control" id="senha" name="senha" type="password" placeholder="Digite sua senha"/>
        </div>
        </div><br>

        <div class="form-group">
        <div class="col-sm-2">
            <button class="btn btn-success" type="submit">Acessar</button>
        </div>
        </div>
    </center>
</div>

<?php echo form_close(); ?>