<?php
include_once 'func/func.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';

if (isset($_GET['idproduto'])) {
    $produto_id = $_GET['idproduto'];

    // Use a função listarTodosRegistrosId() para buscar as informações do produto com base no ID
    $produto = listarTodosRegistrosId('produto', 'nome, img1, img2, img3, descricao, material, dimensoes, peso, valor', 'A', 'idproduto', $produto_id);

    if ($produto && $produto !== 'Vazio') {
        $produto = $produto[0]; // Pega o primeiro (e único) resultado
        $nomeProduto = $produto->nome;

        // Define os caminhos completos das imagens
        $img1Produto = "./img/produtos/" . $produto->img1;
        $img2Produto = "./img/produtos/" . $produto->img2;
        $img3Produto = "./img/produtos/" . $produto->img3;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <style>
        /* Estilos CSS inline */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .product-container {
            position: absolute;
            top: 70px;
            left: 30px;
            display: flex;
            flex-direction: column;
        }

        .product {
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .product img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .main-product-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30%;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .main-product {
            width: 100%;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            position: relative;
        }

        .main-product img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .main-product-description {
            width: 70%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .add-to-cart-button {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        /* Posicionando o texto na extremidade inferior direita */
        .bottom-right-text {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        /* Efeito de zoom nos produtos */
        .product:hover,
        .main-product:hover {
            transform: scale(1.05);
        }

        /* Efeito de lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            cursor: pointer;
        }

        .lightbox.active {
            display: flex;
        }
    </style>
</head>

<body>

<div class="product-container">
    <!-- Produto 1 -->
    <div class="product" onclick="openLightbox('<?php echo $img1Produto; ?>')">
        <?php
        // Verifique se img1Produto não está vazio antes de exibi-la
        if (!empty($img1Produto)) {
            echo '<img class="product thumbnail" src="' . $img1Produto . '" alt="' . $nomeProduto . ' - Imagem 1">';
        }
        ?>
    </div>

    <!-- Produto 2 -->
    <div class="product" onclick="openLightbox('<?php echo $img2Produto; ?>')">
        <?php
        // Verifique se img2Produto não está vazio antes de exibi-la
        if (!empty($img2Produto)) {
            echo '<img class="product thumbnail" src="' . $img2Produto . '" alt="' . $nomeProduto . ' - Imagem 2">';
        }
        ?>
    </div>
</div>

<div class="main-product-container" onclick="openLightbox('<?php echo $img1Produto; ?>')">
    <!-- Imagem maior (centralizada) -->
    <div class="main-product">
        <?php
        // Verifique se img1Produto não está vazio antes de exibi-la
        if (!empty($img1Produto)) {
            echo '<img class="product" src="' . $img1Produto . '" alt="' . $nomeProduto . ' - Imagem 1">';
        }
        ?>
        <div class="main-product-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo tristique, venenatis velit a, interdum neque.</p>
        </div>
        <div class="add-to-cart-button">
            <button>Add to Cart</button>
        </div>
    </div>
</div>

<!-- Texto "Lorem Ipsum" na extremidade inferior direita -->
<div class="bottom-right-text">
    <p>Lorem Ipsum</p>
</div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <img src="" alt="Lightbox Image" id="lightbox-image">
</div>

<script>
    function openLightbox(imageSrc) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        lightboxImage.src = imageSrc;
        lightbox.classList.add('active');
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
    }
</script>
</body>
</html>

<?php
} else {
    echo "Produto não encontrado.";
}
} else {
    echo "ID do produto não especificado na URL.";
}
?>
