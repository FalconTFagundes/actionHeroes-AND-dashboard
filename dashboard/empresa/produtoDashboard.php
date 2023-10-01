<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" width="5%">ID</th>
            <th scope="col" width="2%">Nome</th>
            <th scope="col" width="2%">Img 1</th>
            <th scope="col" width="2%">Img 2</th>
            <th scope="col" width="2%">img 3</th>
            <th scope="col" width="2%">Descrição</th>
            <th scope="col" width="5%">Material</th>
            <th scope="col" width="5%">Dimensões</th>
            <th scope="col" width="5%">Peso</th>
            <th scope="col" width="5%">Valor</th>
            <th scope="col" width="5%">Desconto</th>
            <th scope="col" width="5%">Destaque</th>
            <th scope="col" width="5%">Frete Gratis</th>
            <th scope="col" width="5%">Ação</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $listarProdutoDash = listarTodosRegistros('produto', 'idproduto, nome, img1, img2, img3, descricao, material, dimensoes, peso, valor, cadastro, alteracao, ativo, desconto, destaque, freteGratis', 'A');
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
                    <button type="button" class="btn btn-primary">Veja</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                    <button type="button" class="btn btn-success">Editar</button>
                </td>



            </tr>
        <?php    } ?>
    </tbody>
</table>