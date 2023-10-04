<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';



?>
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%;" data-bs-toggle="modal" data-bs-target="#modalUniversoGeek">
    Cadastrar
</button>



<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" width="20%">ID</th>
            <th scope="col" width="20%">Img</th>
            <th scope="col" width="30%">Arquivo</th>
            <th scope="col" width="20%">Ação</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $listarUniversoGeekDash = listarDashboard('universogeek', 'iduniversoGeek, img, cadastro, alteracao, ativo');
        foreach ($listarUniversoGeekDash as $itemGeekDash) {
            $idGeekDash = $itemGeekDash->iduniversoGeek;
            $imgGeekDash = $itemGeekDash->img;

            $cadastroUniversoGeek = $itemGeekDash->cadastro;
            $ativoUniversoGeek = $itemGeekDash->ativo;

        ?>

            <tr>
                <th scope="row"><?php echo $idGeekDash; ?></th>

                <td>
                    <img src="../img/marcas/<?php echo $imgGeekDash; ?>" alt="" style="max-width: 100px; max-height: 100px;">
                </td>

                <td><?php echo $imgGeekDash; ?></td>

                <td>
                    <?php
                    if ($ativoUniversoGeek == 'A') {
                    ?>
                        <button type='button' class='btn btn-success' onclick="ativarGeral(<?php echo $idGeekDash; ?>, 'desativar', 'ativarUniversoGeek', 'universogeekDashboard');"> <i class='mdi mdi-lock-open'></i> Desativar</button>
                    <?php
                    } else {
                    ?>
                        <button type='button' class='btn btn-dark' onclick="ativarGeral(<?php echo $idGeekDash; ?>, 'ativar', 'ativarUniversoGeek', 'universogeekDashboard');"><i class='mdi mdi-lock-check'></i> Ativar</button>

                    <?php
                    }
                    ?>
                    <!--  <button type="button" class="btn btn-primary mdi mdi-lock-open-check"> Ativado</button>   -->


                    <button type="button" class="btn btn-danger mdi mdi-close-thick" onclick="excGeral(<?php echo $idGeekDash; ?>, 'excUniversoGeek','universogeekDashboard', 'Tem certeza que deseja excluir este dado?')">Excluir</button>
                </td>



            </tr>
        <?php    } ?>
    </tbody>
</table>



<!-- MODAL CADASTRAR MUNDO GEEK -->
<div class="modal fade" id="modalUniversoGeek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Título Geek</h5>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="arquivoUniversoGeek" class="form-label">Enviar Arquivo</label>
                        <input type="file" name="arquivoUniversoGeek" class="form-control" id="arquivoUniversoGeek" aria-describedby="arquivoUniversoGeek">
                    </div>
                    <div id="previewUploadUniversoGeek"> </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" id="btnUploadArquivoUniversoGeek"><i class="mdi mdi-content-save-move"></i> Salvar</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="./js/painel.js"></script>