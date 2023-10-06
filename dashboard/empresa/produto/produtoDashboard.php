<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>


<!-- BTN CADASTRAR PRODUTO -->
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%;" data-bs-toggle="modal" data-bs-target="#modalCadastrarProduto">
    Cadastrar
</button>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" width="5%">ID</th>
            <th scope="col" width="8%">Nome</th>
            <th scope="col" width="2%">Img 1</th>
            <th scope="col" width="2%">Img 2</th>
            <th scope="col" width="2%">img 3</th>
            <th scope="col" width="10%">Descrição</th>
            <th scope="col" width="5%">Material</th>
            <th scope="col" width="5%">Dimensões</th>
            <th scope="col" width="5%">Peso</th>
            <th scope="col" width="5%">Valor</th>
            <th scope="col" width="5%">Desconto</th>
            <th scope="col" width="5%">Destaque</th>
            <th scope="col" width="10%">Frete Gratis</th>
            <th scope="col">Ação</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $listarProdutoDash = listarDashboard('produto', 'idproduto, nome, img1, img2, img3, descricao, material, dimensoes, peso, valor, cadastro, alteracao, ativo, desconto, destaque, freteGratis');
        foreach ($listarProdutoDash as $itemProdutoDash) {
            $idProduto = $itemProdutoDash->idproduto;
            $nomeProduto = $itemProdutoDash->nome;
            $img1Prod = $itemProdutoDash->img1;
            $img2Prod = $itemProdutoDash->img2;
            $img3Prod = $itemProdutoDash->img3;
            $descricaoProduto = $itemProdutoDash->descricao;
            $materialProduto = $itemProdutoDash->material;
            $dimensaoProduto = $itemProdutoDash->dimensoes;
            $pesoProduto = $itemProdutoDash->peso;
            $valorproduto = $itemProdutoDash->valor;
            $descontoProduto = $itemProdutoDash->desconto;
            $destaqueProduto = $itemProdutoDash->destaque;
            $fretegratisProduto = $itemProdutoDash->freteGratis;

            $cadastroProduto = $itemProdutoDash->cadastro;
            $ativoProduto = $itemProdutoDash->ativo;


        ?>

            <tr>
                <th scope="row"><?php echo $idProduto; ?></th>
                <td scope="row"><?php echo $nomeProduto; ?></td>

                <td>
                    <img src="../img/produtos/<?php echo $img1Prod; ?>" alt="" style="max-width: 40px; max-height: 40px;">
                </td>



                <td> <img src="../img/produtos/<?php echo $img2Prod; ?>" alt="" style="max-width: 40px; max-height: 40px;"></td>


                <td> <img src="../img/produtos/<?php echo $img3Prod; ?>" alt="" style="max-width: 40px; max-height: 40px;"></td>


                <!-- limitando numero de caracteres -->
                <td><?php echo strlen($descricaoProduto) > 100 ? substr($descricaoProduto, 0, 50) . '...' : $descricaoProduto; ?></td>

                <td><?php echo $materialProduto; ?></td>
                <td><?php echo $dimensaoProduto; ?></td>
                <td><?php echo $pesoProduto; ?></td>
                <td><?php echo $valorproduto; ?></td>
                <td><?php echo $descontoProduto; ?></td>
                <td><?php echo $destaqueProduto; ?></td>
                <td><?php echo $fretegratisProduto; ?></td>

                <td>
                    <?php
                    if ($ativoProduto == 'A') {
                    ?>
                        <button type='button' class='btn btn-success' onclick="ativarGeral(<?php echo $idProduto; ?>, 'desativar', 'ativarProduto', 'produtoDashboard');"> <i class='mdi mdi-lock-open'></i> Desativar</button>
                    <?php
                    } else {
                    ?>
                        <button type='button' class='btn btn-dark' onclick="ativarGeral(<?php echo $idProduto; ?>, 'ativar', 'ativarProduto', 'produtoDashboard');"><i class='mdi mdi-lock-check'></i> Ativar</button>

                    <?php
                    }
                    ?>
                    <!--  <button type="button" class="btn btn-primary mdi mdi-lock-open-check"> Ativado</button>   -->


                    <button type="button" class="btn btn-danger mdi mdi-close-thick" onclick="excGeral(<?php echo $idProduto; ?>, 'excProduto','produtoDashboard', 'Tem certeza que deseja excluir este dado?')">Excluir</button>
                </td>



            </tr>
        <?php    } ?>
    </tbody>
</table>



<!-- MODAL CADASTRAR PRODUTO -->
<div class="modal fade" id="modalCadastrarProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Produto</h5>
            </div>
            <div class="modal-body">
                <form id="frmCadProd" action="#" method="POST" enctype="multipart/form-data">
                    <label for="nome" class="form-label">Nome</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nome" aria-label="nome" aria-describedby="basic-addon1" required>
                    </div>

                    <label for="descricao" class="form-label">Descrição</label>
                    <div class="input-group">
                        <textarea class="form-control" name="descricao" aria-label="descricao" required></textarea>
                    </div>

                    <label for="material" class="form-label">Material</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="material" aria-label="material" aria-describedby="basic-addon1" required>
                    </div>

                    <label for="dimensoes" class="form-label">Dimensões</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="dimensoes" aria-label="dimensoes" aria-describedby="basic-addon2" required>
                    </div>

                    <label for="peso" class="form-label">Peso</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="peso" id="pesoProd" aria-label="peso" aria-describedby="basic-addon1" required>
                    </div>

                    <label for="valor" class="form-label">Valor R$</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="valor" id="valorProd" aria-label="valor" aria-describedby="basic-addon2" required>
                    </div>

                    <label for="desconto" class="form-label">Desconto %</label>

                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="desconto" id="desconto" aria-label="desconto" aria-describedby="basic-addon2">
                    </div>
                    <div id="descontoAviso" class="form-text">Caso não queira acrescentar um desconto, deixe o campo vazio.</div>
                    <br><br>
                    <label for="valor" class="form-label">Selecione a Classificação do Produto</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="classificacaoProd" value="destaque" id="prodDestaque" checked>
                        <label class="form-check-label" for="prodDestaque">
                            Produto Destaque
                        </label>
                    </div>
                    <p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="classificacaoProd" value="fretegratis" id="prodFreteGratis">
                        <label class="form-check-label" for="prodFreteGratis">Produto Frete Grátis</label>
                    </div>


                    <div class="container-fluid">
                        <div class="mb-3">
                            <label for="arquivoProd1" class="form-label">Enviar Arquivo</label>
                            <input type="file" name="arquivoProd1" class="form-control" id="arquivoProd1" aria-describedby="arquivoProd1">
                        </div>
                        <div id="previewUploadProd1"> </div>

                        <div class="mb-3">
                            <label for="arquivoProd2" class="form-label">Enviar Arquivo</label>
                            <input type="file" name="arquivoProd2" class="form-control" id="arquivoProd2" aria-describedby="arquivoProd2">
                        </div>
                        <div id="previewUploadProd2"> </div>

                        <div class="mb-3">
                            <label for="arquivoProd3" class="form-label">Enviar Arquivo</label>
                            <input type="file" name="arquivoProd3" class="form-control" id="arquivoProd3" aria-describedby="arquivoProd3">
                        </div>
                        <div id="previewUploadProd3"> </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" onclick="cadProdutosUpload('frmCadProd','addProduto');"><i class="mdi mdi-content-save-move"></i> Salvar</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
</div>


<script src="./js/painel.js"></script>