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
            <th scope="col" width="4%">ID</th>
            <th scope="col" width="6%">Titulo 1</th>
            <th scope="col" width="6%">Titulo 2</th>
            <th scope="col" width="6%">Descrição</th>
            <th scope="col" width="6%">Img 1</th>
            <th scope="col" width="6%">Img 2</th>
            <th scope="col" width="6%">Box 1</th>
            <th scope="col" width="6%">Desc 1</th>
            <th scope="col" width="6%">Box 2</th>
            <th scope="col" width="6%">Desc 2</th>
            <th scope="col" width="6%">Box 3</th>
            <th scope="col" width="6%">Desc 3</th>
            <th scope="col" width="6%">Box 4</th>
            <th scope="col" width="8%">Desc 4</th>
            <th scope="col" width="8%">Ação</th>

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
                    <button type="button" class="btn btn-primary">Ativar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </td>



            </tr>
        <?php    } ?>
    </tbody>
</table>

<!-- MODAL CADASTRAR CARACTERISTICAS -->
<div class="modal fade" id="modalCadastrarCaracteristicas" tabindex="-1  " aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Caracteristicas</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="titulo1" class="form-label">Primeiro titulo</label>
                        <input type="text" name="titulo1" class="" id="" size="50%" required>
                        <label for="titulo1" class="form-label">Segundo titulo</label>
                        <input type="text" name="titulo1" class="" id="" size="50%" required><br>

                        <div class="form-floating">
                        <label for="descricao">Descrição</label>
                            <textarea class="form-control" placeholder="Digite a Descrição" id="descricao" style="height: 70px"></textarea><br>
                        
                        </div>

                        <label for="box1" class="form-label">Box 1</label>
                        <input type="text" name="box1" class="" id="" size="50%" required>
                        <label for="Desc1" class="form-label">Desc 1</label>
                        <input type="text" name="Desc1" class="" id="" size="50%" required><br>

                        <label for="box2" class="form-label">Box 2</label>
                        <input type="text" name="box2" class="" id="" size="50%" required>
                        <label for="Desc2" class="form-label">Desc 2</label>
                        <input type="text" name="Desc2" class="" id="" size="50%" required><br>


                        <label for="box3" class="form-label">Box 3</label>
                        <input type="text" name="box3" class="" id="" size="50%" required>
                        <label for="Desc3" class="frm-label">Desc 3</label>
                        <input type="text" name="Desc3" class="" id="" size="50%" required><br>

                        <label for="box4" class="form-label">Box 4</label>
                        <input type="text" name="box4" class="" id="" size="50%" required>
                        <label for="Desc4" class="form-label">Desc 4</label>
                        <input type="text" name="Desc4" class="" id="" size="50%" required><br>

                        


                        <label for="arquivoCaracteristicas1" class="form-label">Selecione a Primeira Imagem:</label>
                        <input type="file" name="arquivoCaracteristicas1" class="form-control" id="arquivoCaracteristicas1" aria-describedby="arquivoBanner" required> <br>
                        <div id="previewUploadCaracteristicas1"> </div> <br>


                        <label for="arquivoCaracteristicas2" class="form-label">Selecione a Segunda Imagem:</label>
                        <input type="file" name="arquivoCaracteristicas2" class="form-control" id="arquivoCaracteristicas2" aria-describedby="arquivoBanner" required> <br>
                        <div id="previewUploadCaracteristicas2"> </div> <br>



                    </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-info" id="btnUploadCaracteristicas"><i class="mdi mdi-content-save-move"></i> Salvar</button>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
                </form>

            </div>
        </div>
    </div>
</div>


<script src="./js/painel.js"></script>