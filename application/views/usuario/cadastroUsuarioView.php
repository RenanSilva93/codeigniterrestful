<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');

echo form_open('api/usuario');
?>

<br>
<div class="form-horizontal">
    <div class="form-group">
        <div class="col-sm-5">
            <a href="<?php echo base_url(); ?>" class="btn btn-success">Entrar no Sistema</a>
        </div>
    </div>
    
    <center><h3><?php echo "Cadastro de Usuário"; ?></h3></center>
    <br>

    <div class="form-inline">
        <label class="col-sm-4" for="nome">Nome:</label>
        <input class="form-control col-sm-5" placeholder="Nome" id="nome" name="nome" type="text" required/>
    </div><br>

    <div class="form-inline">
        <label class="col-sm-4" for="email">E-mail:</label>
        <input class="form-control col-sm-5" placeholder="E-mail" id="email" name="email" type="text"/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="senha">Senha:</label>
        <input class="form-control col-sm-5" placeholder="Senha" id="senha" name="senha" type="password" required/>
    </div><br>

    <div class="form-inline">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <button class="btn btn-success" type="submit" id="botao-salvar">Salvar</button>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</center>
<?php echo form_close(); ?>

