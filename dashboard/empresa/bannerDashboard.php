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
      <th scope="col" width="35%">Arquivo</th>
      <th scope="col" width="25%">Ação</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $listarBannerDash = listarTodosRegistros('banner', 'idbanner, img, cadastro, alteracao, ativo', 'A');
    foreach ($listarBannerDash as $itemBannerDash) {
      $idBanner = $itemBannerDash->idbanner;
      $imgBanner = $itemBannerDash->img;
      $cadastroBanner = $itemBannerDash->cadastro;
      $alteracaoBanner = $itemBannerDash->alteracao;
      $ativoBanner = $itemBannerDash->ativo;

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