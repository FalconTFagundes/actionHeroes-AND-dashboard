<?php
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';



?>

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
        $listarUniversoGeekDash = listarTodosRegistros('universogeek', 'iduniversoGeek, img, cadastro, alteracao, ativo', 'A');
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
                    <button type="button" class="btn btn-primary">Ativar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
            
                </td>



            </tr>
        <?php    } ?>
    </tbody>
</table>