<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


?>
<div class="container-fluid">
<br>
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%; padding: 8px 8px;" data-bs-toggle="modal" data-bs-target="#modalInit">
    Cadastrar
</button>
</div>
<br>

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
    $listarInitDash = listarDashboard('init', 'idinit, icon, text, cadastro, alteracao, ativo');
    foreach ($listarInitDash as $itemInitDash) {
      $idInit = $itemInitDash->idinit;
      $iconInitDashboard = $itemInitDash->icon;
      $textInit = $itemInitDash->text;
      $cadastroInit = $itemInitDash->cadastro;
      $ativoInit = $itemInitDash->ativo;

    ?>

      <tr>
        <th scope="row"><?php echo $idInit; ?></th>


        <td><?php echo $iconInitDashboard; ?></td>

        <td><?php echo $textInit; ?></td>

        <td>
          <?php
          if ($ativoInit == 'A') {
          ?>
            <button type='button' class='btn btn-success' onclick="ativarGeral(<?php echo $idInit; ?>, 'desativar', 'ativarInit', 'initDashboard');"> <i class='mdi mdi-lock-open'></i> Desativar</button>
          <?php
          } else {
          ?>
            <button type='button' class='btn btn-dark' onclick="ativarGeral(<?php echo $idInit; ?>, 'ativar', 'ativarInit', 'initDashboard');"><i class='mdi mdi-lock-check'></i> Ativar</button>

          <?php
          }
          ?>
          <!--  <button type="button" class="btn btn-primary mdi mdi-lock-open-check"> Ativado</button>   -->


          <button type="button" class="btn btn-danger mdi mdi-close-thick" onclick="excGeral(<?php echo $idInit; ?>, 'excInit','initDashboard', 'Tem certeza que deseja excluir este dado?')">Excluir</button>
        </td>



      </tr>
    <?php    } ?>
  </tbody>
</table>

<!-- MODAL CADASTRAR INIT -->
<div class="modal fade" id="modalInit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Título Geek</h5>
      </div>
      <div class="modal-body">
        <form id="frmAddInit">
          <label for="iconInit" class="form-label">Código do ícone</label>
          <input type="text" name="iconInit" class="" id="" required>
          <label for="textoInit" class="form-label">Texto</label>
          <input type="text" name="textoInit" class="" id="" required> <br>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info" onclick="cadGeral('frmAddInit','modalInit','addInit','initDashboard');"><i class="mdi mdi-content-save-move"></i> Salvar</button>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>