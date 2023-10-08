<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';



?>
<div class="container-fluid">
<br>
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%; padding: 8px 8px;" data-bs-toggle="modal" data-bs-target="#modalCadastrarComentario">
    Cadastrar
</button>
</div>
<br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="10%">ID</th>
      <th scope="col" width="10%">Img</th>
      <th scope="col" width="10%">Arquivo</th>
      <th scope="col" width="20%">Comentario</th>
      <th scope="col" width="15%">Nome</th>
      <th scope="col" width="20%">Profissao</th>
      <th scope="col">Ação</th>

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
<div class="modal fade" id="modalCadastrarComentario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Comentario</h5>
      </div>
      <div class="modal-body">
        <form name="frmAddComentario" id="frmAddComentario" action="#" method="POST" enctype="multipart/form-data">
          <label for="nome" class="form-label">Nome</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nome" aria-label="Nome" aria-describedby="basic-addon1" required>
          </div>

          <label class="form-label">Profissão</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="profissao" aria-label="profissao" aria-describedby="basic-addon2" required>
          </div>

          <label for="comentario" class="form-label">Comentario</label>
          <div class="input-group">
            <textarea class="form-control" name="comentario" aria-label="comentario" required></textarea>
          </div><br><br>

          <label for="arquivoComentario" class="form-label">Selecione uma Imagem</label><br>
          <input type="file" name="arquivoComentario" class="" id="arquivoComentario" required> <br>


          <div id="previewUploadComentario"></div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-info" id="btnCadastrarComentario" onclick="cadComentariosUpload('frmAddComentario','uploadComentarios');"><i class="mdi mdi-content-save-move"></i> Salvar</button>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<script src="./js/painel.js"></script>