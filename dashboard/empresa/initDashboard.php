

<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="20%">ID</th>
      <th scope="col" width="25%">Icon</th>
      <th scope="col" width="30%">Texto</th>
      <th scope="col" width="25%">Ação</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $listarInit = listarTodosRegistros('init', 'idinit, icon, text, cadastro, alteracao, ativo', 'A');
    foreach ($listarInit as $itemInit) {
      $idInit = $itemInit->idinit;
      $iconInitDashboard = $itemInit->icon;
      $textInit = $itemInit->text;
      $cadastroInit = $itemInit->cadastro;
      $ativoInit = $itemInit->ativo;

    ?>

      <tr>
        <th scope="row"><?php echo $idInit; ?></th>

    
        <td><?php echo $iconInitDashboard; ?></td>

        <td><?php echo $textInit; ?></td>

        <td>
          <button type="button" class="btn btn-primary">Veja</button>
          <button type="button" class="btn btn-danger">Excluir</button>
          <button type="button" class="btn btn-success">Editar</button>
        </td>

      

      </tr>
    <?php    } ?>
  </tbody>
</table>