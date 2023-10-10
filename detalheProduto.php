<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/func.php';


if (isset($_GET['idproduto'])) {
    $produto_id = $_GET['idproduto'];


    $produto = listarTodosRegistrosId('produto', 'nome, valor', 'A', 'idproduto', $produto_id);

    if ($produto && $produto !== 'Vazio') {
        $produto = $produto[0];

    
        $produto_adicionado = array(
            'id' => $produto_id,
            'nome' => $produto->nome,
            'preco' => $produto->valor
        );

        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array();
        }

        $_SESSION['carrinho'][] = $produto_adicionado;
    }
}


if (isset($_GET['idproduto'])) {
    $produto_id = $_GET['idproduto'];


    $produto = listarTodosRegistrosId('produto', 'nome, img1, img2, img3, descricao, material, dimensoes, peso, valor', 'A', 'idproduto', $produto_id);

    if ($produto && $produto !== 'Vazio') {
        $produto = $produto[0];
        $nomeProduto = $produto->nome;

        $imgProduto = isset($_GET['img']) ? "./img/produtos/" . $_GET['img'] : '';

        $img1Produto = "./img/produtos/" . $produto->img1;
        $img2Produto = "./img/produtos/" . $produto->img2;
        $img3Produto = "./img/produtos/" . $produto->img3;
?>

        <!DOCTYPE html>
        <html lang="pt-br">

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
                    display: flex;
                    flex-direction: column;
                    /* Para ajustar o layout da página */
                    align-items: center;
                }

                /* Estilos para a barra de navegação */
                .navbar {
                    background-color: #333;
                    color: white;
                    text-align: center;
                    padding: 10px;
                    width: 100%;
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
                    margin-top: 100px;
                    cursor: pointer;
                    transition: transform 0.3s ease-in-out;
                }

                .product img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    max-width: 200px;

                    max-height: 300px;
                    object-fit: contain;

                }

                .main-product-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 50%;
                    cursor: pointer;
                    transition: transform 0.3s ease-in-out;
                    margin: 20px;
                }

                .main-product {
                    width: 100%;
                    cursor: pointer;
                    transition: transform 0.3s ease-in-out;
                    position: relative;
                }

                .main-product img {
                    width: 50%;
                    height: 70%;
                    margin: auto;
                    object-fit: contain;
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
                    margin: 90px 330px 0px 0px;
                    max-width: 70%;
                    max-height: 130%;
                    cursor: pointer;
                    max-width: 400px;

                    max-height: 400px;

                    object-fit: contain;


                }

                .lightbox.active {
                    display: flex;
                }

                /* Estilos da barra de navegação */
                .navbar {
                    background-color: #333;
                    color: white;
                    text-align: center;
                    padding: 10px;
                    position: fixed;
                    top: 0;
                    width: 100%;
                }

                .navbar h1 {
                    margin: 0;
                }

                /* Responsividade */
                @media screen and (max-width: 768px) {
                    .main-product-container {
                        width: 100%;
                    }

                    .main-product img {
                        margin-top: 0;
                    }
                }

                .main-product-description {
                    max-height: 400px;
                    text-align: justify;
                    padding: 20px;
                    background-color: #fff;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                    margin: 0px 0px 0px 900px;
                    position: absolute;
                    width: 40%;
                    overflow-y: auto;
                    /* Adiciona rolagem vertical quando necessário */
                }

                .neon-button {

                    background-color: #ff0;
                    color: black;
                    border: none;
                    width: 70%;
                    height: 90%;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                    transition: background-color 0.3s, box-shadow 0.3s;
                    text-align: center;
                    align-items: center;
                }

                /* Efeito de luz neon no hover */
                .neon-button:hover {
                    background-color: #ffdd00;
                    /* Amarelo suavizado */
                    box-shadow: 0 0 10px rgba(255, 221, 0, 0.7), 0 0 10px rgba(255, 221, 0, 0.7), 0 0 10px rgba(255, 221, 0, 0.7);
                    /* Brilho suave */
                }

                .button-container {
                    display: flex;
                    justify-content: center;
                    /* Centraliza horizontalmente */
                    align-items: center;
                    /* Centraliza verticalmente */

                }
            </style>
            <link href="img/favicon.ico" rel="icon">
            <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600;700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
            <link href="lib/animate/animate.min.css" rel="stylesheet">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">




        </head>

        <body>
            <?php
            include_once 'navbar.php';
            ?>

            <div class="product-container">
                <div class="product" onclick="openLightbox('<?php echo $img1Produto; ?>')">
                    <?php

                    if (!empty($img1Produto)) {
                        echo '<img class="product thumbnail" src="' . $img1Produto . '" alt="' . $nomeProduto . ' - Imagem 1">';
                    }
                    ?>
                </div>

                <!-- Produto 2 -->
                <div class="product" onclick="openLightbox('<?php echo $img2Produto; ?>')">
                    <?php
                    if (!empty($img2Produto)) {
                        echo '<img class="product thumbnail" src="' . $img2Produto . '" alt="' . $nomeProduto . ' - Imagem 2">';
                    }
                    ?>
                </div>
            </div>

            <div class="main-product-container">

                <div class="main-product">
                    <?php

                    if (!empty($img1Produto)) {
                        echo '<img class="product" src="' . $img3Produto . '" alt="' . $nomeProduto . ' - Imagem 1">';
                    }
                    ?>
                </div>


                <div class="main-product-description">
                    <h2><?php echo $nomeProduto; ?></h2>
                    <p>Descrição: <?php echo $produto->descricao; ?></p>
                    <p>Material: <?php echo $produto->material; ?></p>
                    <p>Dimensões: <?php echo $produto->dimensoes; ?></p>
                    <p>Peso: <?php echo $produto->peso; ?></p>
                    <p>Valor: <?php echo $produto->valor; ?></p>
                    <!-- Adicione mais detalhes do produto aqui -->
                    <form action="carrinho.php" method="POST">
                        <input type="hidden" name="produto_id" value="<?php echo $produto_id; ?>">
                        <button type="submit" class="neon-button">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>


            </div>






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