<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>


<!-- BTN CADASTRAR PRODUTO -->
<button type="submit" class="btn btn-warning mdi mdi-layers" style="width: 10%;" data-bs-toggle="modal" data-bs-target="#modalProduto">
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
<div class="modal fade" id="modalProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title align-items-center" id="exampleModalLabel">Cadastrar Banner</h5>
            </div>
            <div class="modal-body">
                <form id="frmCadProd">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="" id="" required>
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" name="descricao" class="" id="" required>
                    <label for="material" class="form-label">Material</label>
                    <input type="text" name="material" class="" id="" required> <br>
                    <label for="dimensoes" class="form-label">Dimensões</label>
                    <input type="text" name="dimensoes" class="" id="" required>
                    <label for="peso" class="form-label">Peso</label>
                    <input type="text" name="peso" class="" id="" required>
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" name="valor" class="" id="" required>
                    <label for="desconto" class="form-label">Desconto</label>
                    <input type="text" name="desconto" class="" id="" required> <br>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" onclick="cadGeral('frmCadProd','modalProduto','addProduto','produtoDashboard');"><i class="mdi mdi-content-save-move"></i> Salvar</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


<script src="./js/painel.js"></script>