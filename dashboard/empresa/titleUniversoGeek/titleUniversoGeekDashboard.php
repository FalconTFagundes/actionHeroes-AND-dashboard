<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


?>
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%;" data-bs-toggle="modal" data-bs-target="#modalTitleGeek">
  Cadastrar
</button>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="20%">ID</th>
      <th scope="col" width="50%">Title</th>
      <th scope="col" width="30%">Ação</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $listarTituloGeek = listarDashboard('titleuniversogeek', 'idtitleUniversoGeek, title, cadastro, alteracao, ativo');
    foreach ($listarTituloGeek as $itemTitleGeekDash) {
      $idTitleGeekDash = $itemTitleGeekDash->idtitleUniversoGeek;
      $titleGeekDash = $itemTitleGeekDash->title;

      $cadastroTitleGeek = $itemTitleGeekDash->cadastro;
      $ativoTitleGeek = $itemTitleGeekDash->ativo;

    ?>

      <tr>
        <th scope="row"><?php echo $idTitleGeekDash; ?></th>


        <td><?php echo $titleGeekDash; ?></td>

        <td>
          <?php
          if ($ativoTitleGeek == 'A') {
          ?>
            <button type='button' class='btn btn-success' onclick="ativarGeral(<?php echo $idTitleGeekDash; ?>, 'desativar', 'ativarTitleUniversoGeek', 'titleUniversoGeekDashboard');"> <i class='mdi mdi-lock-open'></i> Desativar</button>
          <?php
          } else {
          ?>
            <button type='button' class='btn btn-dark' onclick="ativarGeral(<?php echo $idTitleGeekDash; ?>, 'ativar', 'ativarTitleUniversoGeek', 'titleUniversoGeekDashboard');"><i class='mdi mdi-lock-check'></i> Ativar</button>

          <?php
          }
          ?>
          <!--  <button type="button" class="btn btn-primary mdi mdi-lock-open-check"> Ativado</button>   -->


          <button type="button" class="btn btn-danger mdi mdi-close-thick" onclick="excGeral(<?php echo $idTitleGeekDash; ?>, 'excTitleUniversoGeek','titleUniversoGeekDashboard', 'Tem certeza que deseja excluir este dado?')">Excluir</button>
        </td>

      </tr>
    <?php    } ?>
  </tbody>
</table>

<!-- MODAL CADASTRAR TITLE GEEK -->
<div class="modal fade" id="modalTitleGeek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Título Geek</h5>
      </div>
      <div class="modal-body">
        <form id="frmAddTitleGeek" name="frmAddTitleGeek" method="POST">
          <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="" id="titulo" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info" onclick="cadGeral('frmAddTitleGeek', 'modalTitleGeek', 'addTitleUniversoGeek', 'titleUniversoGeekDashboard');"><i class="mdi mdi-content-save-move"></i> Salvar</button>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>