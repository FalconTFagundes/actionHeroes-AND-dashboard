<div class="container">
    <div class="card border-5" style="text-align: center;">
        <div class="card-body">
            <?php
            $retornoInit = listarTodosRegistros('init', 'icon, text', 'A');
            foreach ($retornoInit as $itemInit) {
                $iconInit = $itemInit->icon;
                $textInit = $itemInit->text;

            ?>
                <i class="<?php echo $iconInit; ?>"></i></i> <?php echo $textInit; ?> |
            <?php } ?>
        </div>
    </div>
</div>