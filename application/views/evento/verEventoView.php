<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');

?>

<br>
<div class="form-horizontal">
    
    <center><h3><?php echo "Evento"; ?></h3></center>
    <br>

    <div class="form-inline">
        <label class="col-sm-4" for="titulo">Título:</label>
        <input class="form-control col-sm-5" type="text" value="<?php echo $evento->titulo; ?>" disabled/>
    </div><br>

    <div class="form-inline">
        <label class="col-sm-4" for="descricao">Descrição:</label>
        <textarea class="form-control col-sm-5" cols="100" rows="5" disabled><?php echo $evento->descricao; ?></textarea>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="data">Data:</label>
        <input class="form-control col-sm-5" type="date" value="<?php echo $evento->data; ?>" disabled/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="hora">Hora:</label>
        <input class="form-control col-sm-5" type="time" value="<?php echo $evento->hora; ?>" disabled>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="cep">CEP:</label>
        <input class="form-control col-sm-5" type="text" value="<?php echo $evento->cep; ?>" disabled/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="endereco">Endereço:</label>
        <input class="form-control col-sm-5" type="text" value="<?php echo $evento->endereco; ?>" disabled/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="Bairro">Bairro:</label>
        <input class="form-control col-sm-5" type="text" value="<?php echo $evento->bairro; ?>" disabled/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="cidade">Cidade:</label>
        <input class="form-control col-sm-5" type="text" value="<?php echo $evento->cidade; ?>" disabled/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-sm-4" for="uf">UF:</label>
        <input class="form-control col-sm-5" type="text" value="<?php echo $evento->uf; ?>" disabled/>
    </div><br>
    
    <div class="form-inline">
        <label class="col-md-4" for="foto">Foto</label>
        <?php if($evento->foto != NULL) { ?>
            <img src="<?php echo base_url('include/uploads/'. $evento->foto) ?>" style="height: 100px;">
        <?php } else { ?>
            Não possui foto.
        <?php } ?>
    </div>

</div>
</center>
<br>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <a href="<?php echo base_url() . 'api/login'; ?>" class="btn btn-success">Lista de Eventos</a>
    </div>
    <div class="col-md-2"></div>
</div><br> 

<?php $this->load->view('templates/footer'); ?>

