<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>
<!-- BTN CADASTRAR BANNER -->
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%;" data-bs-toggle="modal" data-bs-target="#modalCadastrarCaracteristicas">
    Cadastrar
</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" width="2%">ID</th>
            <th scope="col" width="2%">Titulo 1</th>
            <th scope="col" width="6%">Titulo 2</th>
            <th scope="col" width="6%">Descrição</th>
            <th scope="col" width="2%">Img 1</th>
            <th scope="col">Img 2</th>
            <th scope="col">Box 1</th>
            <th scope="col">Desc 1</th>
            <th scope="col">Box 2</th>
            <th scope="col">Desc 2</th>
            <th scope="col">Box 3</th>
            <th scope="col">Desc 3</th>
            <th scope="col">Box 4</th>
            <th scope="col" width="2%">Desc 4</th>
            <th scope="col">Ação</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $listarInfo = listarDashboard('info', 'idinfo, titulo1, titulo2, descricao, imagem1, imagem2, titulo1info, descricao1info, titulo2info, descricao2info, titulo3info, descricao3info, titulo4info, descricao4info, cadastro, alteracao, ativo');
        foreach ($listarInfo as $itemInfo) {
            $idInfo = $itemInfo->idinfo;
            $title1_info = $itemInfo->titulo1;
            $titulo2_info = $itemInfo->titulo2;
            $descricaoInfo = $itemInfo->descricao;
            $img1Info = $itemInfo->imagem1;
            $img2Info = $itemInfo->imagem2;

            $box1 = $itemInfo->titulo1info;
            $descBox1 = $itemInfo->descricao1info;

            $box2 = $itemInfo->titulo2info;
            $descBox2 = $itemInfo->descricao2info;

            $box3 = $itemInfo->titulo3info;
            $descBox3 = $itemInfo->descricao3info;

            $box4 = $itemInfo->titulo4info;
            $descBox4 = $itemInfo->descricao4info;

            $cadastroInfo = $itemInfo->cadastro;
            $ativoInfo = $itemInfo->ativo;
        ?>

            <tr>
                <th scope="row"><?php echo $idInfo; ?></th>

                <td> <?php echo $title1_info; ?></td>

                <td><?php echo $titulo2_info; ?></td>
                <td><?php echo $descricaoInfo; ?></td>

                <td> <img src="../img/caracteristicas/<?php echo $img1Info; ?>" alt="" style="max-width: 60px; max-height: 60px;"></td>
                <td><img src="../img/caracteristicas/<?php echo $img2Info; ?>" alt="" style="max-width: 60px; max-height: 60px;"></td>

                <td><?php echo $box1; ?></td>
                <td><?php echo $descBox1; ?></td>

                <td><?php echo $box2; ?></td>
                <td><?php echo $descBox2; ?></td>

                <td><?php echo $box3; ?></td>
                <td><?php echo $descBox3; ?></td>

                <td><?php echo $box4; ?></td>
                <td><?php echo $descBox4; ?></td>


                <td>
                    <?php
                    if ($ativoInfo == 'A') {
                    ?>
                        <button type='submit' class='btn btn-success' onclick="ativarGeral(<?php echo $idInfo; ?>, 'desativar', 'ativarCaracteristicas', 'caracteristicasDashboard');"> <i class='mdi mdi-lock-open'></i> Desativar</button>
                    <?php
                    } else {
                    ?>
                        <button type='submit' class='btn btn-dark' onclick="ativarGeral(<?php echo $idInfo; ?>, 'ativar', 'ativarCaracteristicas', 'caracteristicasDashboard');"><i class='mdi mdi-lock-check'></i> Ativar</button>

                    <?php
                    }
                    ?>
                    <!--  <button type="button" class="btn btn-primary mdi mdi-lock-open-check"> Ativado</button>   -->


                    <button type="submit" class="btn btn-danger mdi mdi-close-thick" onclick="excGeral(<?php echo $idInfo; ?>, 'excCaracteristicas','caracteristicasDashboard', 'Tem certeza que deseja excluir este dado?')">Excluir</button>

                </td>



            </tr>
        <?php    } ?>
    </tbody>
</table>

<!-- MODAL CADASTRAR CARACTERISTICAS -->
<div class="modal fade" id="modalCadastrarCaracteristicas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Caracteristicas</h5>
            </div>
            <div class="modal-body">
                <form id="frmAddCaracteristicas" action="#" method="POST" enctype="multipart/form-data">
                    <label for="titulo1" class="form-label">Título 1</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="titulo1" aria-label="titulo1" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="titulo2" class="form-label">Título 2</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="titulo2" aria-label="titulo2" aria-describedby="basic-addon1" required>
                    </div>
                    <label for="descricaoCC" class="form-label">Descrição</label>
                    <div class="input-group">
                        <textarea class="form-control" name="descricaoCC" aria-label="descricaoCC" required></textarea>
                    </div><br><br>

                    <label class="form-label">Box 1</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="box1" aria-label="box1" aria-describedby="basic-addon2" required>
                    </div>
                    <label class="form-label">Descrição 1</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="desc1" aria-label="desc1" aria-describedby="basic-addon2" required>
                    </div>

                    <label class="form-label">Box 2</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="box2" aria-label="box2" aria-describedby="basic-addon2" required>
                    </div>
                    <label class="form-label">Descrição 2</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="desc2" aria-label="desc2" aria-describedby="basic-addon2" required>
                    </div>

                    <label class="form-label">Box 3</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="box3" aria-label="box3" aria-describedby="basic-addon2" required>
                    </div>
                    <label class="form-label">Descrição 3</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="desc3" aria-label="desc3" aria-describedby="basic-addon2" required>
                    </div>

                    <label class="form-label">Box 4</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="box4" aria-label="box4" aria-describedby="basic-addon2" required>
                    </div>
                    <label class="form-label">Descrição 4</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="desc4" aria-label="desc4" aria-describedby="basic-addon2" required>
                    </div>

                 
                    <div class="mb-3">
                        <label for="arquivoCaracteristicas1" class="form-label">Enviar Arquivo</label>
                        <input type="file" name="arquivoCaracteristicas1" class="form-control" id="arquivoCaracteristicas1" aria-describedby="arquivoCaracteristicas1">
                    </div>
                    <div id="previewUploadCaracteristicas1"> </div>
                    <br><br>
                    <div class="mb-3">
                        <label for="arquivoCaracteristicas2" class="form-label">Enviar Arquivo</label>
                        <input type="file" name="arquivoCaracteristicas2" class="form-control" id="arquivoCaracteristicas2" aria-describedby="arquivoCaracteristicas2">
                    </div>
                    <div id="previewUploadCaracteristicas2"> </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" id="btnUploadCaracteristicas" onclick="cadCaracteristicasUpload('frmAddCaracteristicas','uploadCaracteristicas');"><i class="mdi mdi-content-save-move"></i> Salvar</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="./js/painel.js"></script>