<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');

?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="<?php echo base_url() . 'api/evento'; ?>" class="btn btn-success">Cadastrar Evento</a>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2"></div>
    </div><br>    
    
<?php if (!empty($eventos)) { ?>
    <div class="table-responsive">
        <table id="tabela" border="1" class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>CEP</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Ver Evento</th>
                </tr>
            <thead>
            <tbody>
                <?php foreach ($eventos as $evento) { ?>
                    <tr>
                        <td><?php echo $evento['titulo']; ?></td>
                        <td><?php echo $evento['descricao']; ?></td>
                        <td><?php echo $evento['data']; ?></td>
                        <td><?php echo $evento['hora']; ?></td>
                        <td><?php echo $evento['cep']; ?></td>
                        <td><?php echo $evento['endereco']; ?></td>
                        <td><?php echo $evento['bairro']; ?></td>
                        <td><?php echo $evento['cidade']; ?></td>
                        <td><?php echo $evento['uf']; ?></td>
                        <td><a href="<?php echo base_url() . 'api/evento/' . $evento['id']; ?>">Ver Evento</a></td>
                    </tr>
    <?php } ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    Não há eventos cadastrados.
<?php } ?>
    
</div>

<?php $this->load->view('templates/footer'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#tabela").DataTable();
    });
</script>