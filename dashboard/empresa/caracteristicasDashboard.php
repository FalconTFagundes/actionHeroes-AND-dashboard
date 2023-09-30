<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>

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
        $listarInfo = listarTodosRegistros('info', 'idinfo, titulo1, titulo2, descricao, imagem1, imagem2, titulo1info, descricao1info, titulo2info, descricao2info, titulo3info, descricao3info, titulo4info, descricao4info, cadastro, alteracao, ativo', 'A');
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

            $box3 = $itemInfo -> titulo3info;
            $descBox3 = $itemInfo -> descricao3info;

            $box4 = $itemInfo -> titulo4info;
            $descBox4 = $itemInfo -> descricao4info;

            $cadastroInfo = $itemInfo -> cadastro;
            $ativoInfo = $itemInfo -> ativo;
        ?>

            <tr>
                <th scope="row"><?php echo $idInfo; ?></th>

                <td> <?php echo $title1_info; ?></td>

                <td><?php echo $titulo2_info; ?></td>
                <td><?php echo $descricaoInfo; ?></td>

                <td> <img src="../img/<?php echo $img1Info; ?>" alt="" style="max-width: 60px; max-height: 60px;"></td>
                <td><img src="../img/<?php echo $img2Info; ?>" alt="" style="max-width: 60px; max-height: 60px;"></td>

                <td><?php echo $box1; ?></td>
                <td><?php echo $descBox1; ?></td>      
                
                <td><?php echo $box2; ?></td>
                <td><?php echo $descBox2; ?></td>

                <td><?php echo $box3; ?></td>
                <td><?php echo $descBox3; ?></td>

                <td><?php echo $box4; ?></td>
                <td><?php echo $descBox4; ?></td>


                <td>
                    <button type="button" class="btn btn-primary">Veja</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                    <button type="button" class="btn btn-success">Editar</button>
                </td>



            </tr>
        <?php    } ?>
    </tbody>
</table>