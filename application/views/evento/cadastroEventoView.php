<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');

echo form_open('api/evento');
?>

<script src="<?php echo base_url('include/maskedinput.js') ?>"></script>

<br>
<div class="form-horizontal">
    
    <center><h3><?php echo "Cadastro de Evento"; ?></h3></center>
    <br>

    <div class="form-inline">
        <label class="col-sm-4" for="titulo">Título:</label>
        <input class="form-control col-sm-5" id="titulo" name="titulo" type="text" required/>
    </div><br>

    <div class="form-inline">
        <label class="col-sm-4" for="descricao">Descrição:</label>
        <textarea class="form-control col-sm-5" id="descricao" name="descricao" cols="100" rows="5"></textarea>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="data">Data:</label>
        <input class="form-control col-sm-5" id="data" name="data" type="date" required/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="hora">Hora:</label>
        <input class="form-control col-sm-5" id="hora" name="hora" type="time" required/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="cep">CEP:</label>
        <input class="form-control col-sm-5" id="cep" name="cep" type="text" required/>
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

<?php $this->load->view('templates/footer'); ?>

<script>
    $('#cep').mask('99999999');
</script>
