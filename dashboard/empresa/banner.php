<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="20%">ID</th>
      <th scope="col" width="20%">Img</th>
      <th scope="col" width="20%">Arquivo</th>
      <th scope="col" width="40%">Ação</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $listarBanner = listarTodosRegistros('banner', 'idbanner, img, cadastro, alteracao, ativo', 'A');
    foreach ($listarBanner as $itemBanner) {
      $idBanner = $itemBanner->idbanner;
      $imgBanner = $itemBanner->img;
      $cadastroBanner = $itemBanner->cadastro;
      $alteracaoBanner = $itemBanner->alteracao;
      $ativoBanner = $itemBanner->ativo;

    ?>

      <tr>
        <th scope="row"><?php echo $idBanner; ?></th>

        <td>
          <img src="../img/banner/<?php echo $imgBanner; ?>" alt="" style="max-width: 300px; max-height: 200px;">
        </td>

        <td><?php echo $imgBanner; ?></td>

        <td>
          <button type="button" class="btn btn-primary">Veja</button>
          <button type="button" class="btn btn-danger">Excluir</button>
          <button type="button" class="btn btn-success">Editar</button>
        </td>

      

      </tr>
    <?php    } ?>
  </tbody>
</table>