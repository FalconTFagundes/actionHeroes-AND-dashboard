<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>

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
    $listarComentarioDash = listarTodosRegistros('comentarios', 'idcomentarios, img, comentario, nome, profissao, cadastro, alteracao, ativo', 'A');
    foreach ($listarComentarioDash as $itemComentarioDash) {
        $idComentario = $itemComentarioDash -> idcomentarios;
        $imgComentario = $itemComentarioDash -> img;
        $comentario = $itemComentarioDash -> comentario;
        $nomeComentario = $itemComentarioDash -> nome;
        $profissaoComentario = $itemComentarioDash -> profissao;
        $cadastroComentario = $itemComentarioDash -> cadastro;
        $ativoComentario = $itemComentarioDash -> ativo;

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
          <button type="button" class="btn btn-primary">Veja</button>
          <button type="button" class="btn btn-danger">Excluir</button>
          <button type="button" class="btn btn-success">Editar</button>
        </td>

      

      </tr>
    <?php    } ?>
  </tbody>
</table>