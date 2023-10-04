<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';



?>
<!-- BTN CADASTRAR COMENTARIO -->
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%;" data-bs-toggle="modal" data-bs-target="#modalCadastrarComentario">
  Cadastrar
</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="10%">ID</th>
      <th scope="col" width="10%">Img</th>
      <th scope="col" width="10%">Arquivo</th>
      <th scope="col" width="20%">Comentario</th>
      <th scope="col" width="15%">Nome</th>
      <th scope="col" width="15%">Profissao</th>
      <th scope="col" width="20%">Ação</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $listarComentarioDash = listarDashboard('comentarios', 'idcomentarios, img, comentario, nome, profissao, cadastro, alteracao, ativo');
    foreach ($listarComentarioDash as $itemComentarioDash) {
      $idComentario = $itemComentarioDash->idcomentarios;
      $imgComentario = $itemComentarioDash->img;
      $comentario = $itemComentarioDash->comentario;
      $nomeComentario = $itemComentarioDash->nome;
      $profissaoComentario = $itemComentarioDash->profissao;
      $cadastroComentario = $itemComentarioDash->cadastro;
      $ativoComentario = $itemComentarioDash->ativo;

    ?>

      <tr>
        <th scope="row"><?php echo $idComentario; ?></th>

        <td>
          <img src="../img/comentarios/<?php echo $imgComentario; ?>" alt="" style="max-width: 70px; max-height: 70px;">
        </td>

        <td><?php echo $imgComentario; ?></td>
        <td><?php echo $comentario; ?></td>
        <td><?php echo $nomeComentario; ?></td>
        <td><?php echo $profissaoComentario; ?></td>

        <td>
          <?php
          if ($ativoComentario == 'A') {
          ?>
            <button type='button' class='btn btn-success' onclick="ativarGeral(<?php echo $idComentario; ?>, 'desativar', 'ativarComentario', 'comentariosDashboard');"> <i class='mdi mdi-lock-open'></i> Desativar</button>
          <?php
          } else {
          ?>
            <button type='button' class='btn btn-dark' onclick="ativarGeral(<?php echo $idComentario; ?>, 'ativar', 'ativarComentario', 'comentariosDashboard');"><i class='mdi mdi-lock-check'></i> Ativar</button>

          <?php
          }
          ?>
          <!--  <button type="button" class="btn btn-primary mdi mdi-lock-open-check"> Ativado</button>   -->


          <button type="button" class="btn btn-danger mdi mdi-close-thick" onclick="excGeral(<?php echo $idComentario; ?>, 'excComentario','comentariosDashboard', 'Tem certeza que deseja excluir este dado?')">Excluir</button>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>



<!-- MODAL CADASTRAR COMENTARIOS -->
<div class="modal fade" id="modalCadastrarComentario" tabindex="-1  " aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Comentario</h5>
      </div>
      <div class="modal-body">
        <form id="frmAddComentario">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="" id="" required>
            <label for="profissao" class="form-label">Profissão</label>
            <input type="text" name="profissao" class="" id="" required> <br>
            <label for="comentario" class="form-label">Comentario</label>
            <input type="text" name="comentario" class="" id="" style="width: 50%;" required> <br><br>

            <label for="uploadImgComentario" class="form-label">Selecione uma Imagem</label><br>
            <input type="file" name="uploadImgComentario" class="" id="arquivoComentario" required> <br>

          </div>
          <div id="previewUploadComentario"></div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-info" id="btnCadastrarComentario" onclick="cadGeral('frmAddComentario','modalCadastrarComentario','uploadComentarios','comentariosDashboard');"><i class="mdi mdi-content-save-move"></i> Salvar</button>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="./js/painel.js"></script>