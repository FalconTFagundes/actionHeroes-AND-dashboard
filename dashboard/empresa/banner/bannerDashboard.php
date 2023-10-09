<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';



?>

<!-- BTN CADASTRAR BANNER -->
<div class="container-fluid">
<br>
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%; padding: 8px 8px;" data-bs-toggle="modal" data-bs-target="#modalCadastrarBanner">
    Cadastrar
</button>
</div>
<br>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" width="20%">ID</th>
      <th scope="col" width="20%">Img</th>
      <th scope="col" width="35%">Arquivo</th>
      <th scope="col" width="30%">Ação</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $listarBannerDash = listarDashboard('banner', 'idbanner, img, cadastro, alteracao, ativo');
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

          <?php
          if ($ativoBanner == 'A') {
          ?>                                                                                
            <button type='button' class='btn btn-success' onclick="ativarGeral(<?php echo $idBanner; ?>, 'desativar', 'ativarBanner', 'bannerDashboard');"> <i class='mdi mdi-lock-open'></i> Desativar</button>
          <?php
          } else {
          ?>
            <button type='button' class='btn btn-dark' onclick="ativarGeral(<?php echo $idBanner; ?>, 'ativar', 'ativarBanner', 'bannerDashboard');"><i class='mdi mdi-lock-check'></i> Ativar</button>

          <?php
          }
          ?>
          <!--  <button type="button" class="btn btn-primary mdi mdi-lock-open-check"> Ativado</button>   -->


          <button type="button" class="btn btn-danger mdi mdi-close-thick" onclick="excGeral(<?php echo $idBanner; ?>, 'excBanner','bannerDashboard', 'Tem certeza que deseja excluir este dado?')">Excluir</button>
        </td>



      </tr>
    <?php    } ?>
  </tbody>
</table>





<!-- MODAL CADASTRAR BANNER -->
<div class="modal fade" id="modalCadastrarBanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Banner</h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="arquivoBanner" class="form-label">Enviar Arquivo</label>
            <input type="file" name="arquivoBanner" class="form-control" id="arquivoBanner" aria-describedby="arquivoBanner">
          </div>
          <div id="previewUploadBanner"> </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-info" id="btnUploadArquivoBanner"><i class="mdi mdi-content-save-move"></i> Salvar</button>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
        </form>

      </div>
    </div>
  </div>
</div>

<script>
/* INICIO FUNÇÃO DE UPLOAD - BANNER */

var redimensionarBanner = $('#previewUploadBanner').croppie({
    enableExif: true,
    enableOrientation: true,

    viewport: { width: 1100, height: 290 },
    boundary: { width: 1100, height: 400 },

});

$('#arquivoBanner').on('change', function () {
    var ler = new FileReader();

    ler.onload = function (e) {
        redimensionarBanner.croppie('bind', {
            url: e.target.result
        });
    }

    ler.readAsDataURL(this.files[0]);
});

$('#btnUploadArquivoBanner').on('click', function (retorno) {
    redimensionarBanner.croppie('result', {
        type: 'canvas', // Tipo de arquivos permitidos - base64, html, blob
        size: 'viewport' // O tamanho da imagem cortada
    }).then(function (img) {
        // Enviar os dados para um arquivo PHP
        $.ajax({
            url: "uploadbanner.php", // Enviar os dados para o arquivo upload.php
            type: "POST", // Método utilizado para enviar os dados
            data: { // Dados que deve ser enviado
                "imagem": img
            },
            success: function () {
                $('#modalCadastrarBanner').modal('hide')
                setTimeout(function () {
                    atualizarPagina('bannerDashboard');
                }, 1000);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Salvo com Sucesso',
                    showConfirmButton: false,
                    timer: 1500

                })

            }
        });
    });
});


/* FIM FUNÇÃO UPLOAD DE IMAGE - BANNER */

</script>