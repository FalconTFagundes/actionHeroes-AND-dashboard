<?php
session_start();
include_once 'func/func.php';
include_once 'config/conexao.php';

// Verifique se o usuário está logado
if (!verificarLogin()) {
    // Se o usuário não estiver logado, redirecione para a página de login
    header('Location: login.php');
    exit;
}


if (isset($_POST['excluir'])) {
    $indice = $_POST['indice'];
    if (isset($_SESSION['carrinho'][$indice])) {
        unset($_SESSION['carrinho'][$indice]);
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']); // Reindexar o array
    }
}

$produtosNoCarrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
$contadorRegistros = count($produtosNoCarrinho);

// Valor total da compra
$valorTotal = 0;

foreach ($produtosNoCarrinho as $produto) {
    $valorTotal += $produto['preco'];
}





?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
   
    <meta charset="utf-8">
    <title>Action Heroes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/cards3d.css">


    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">
    <!-- carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .m-7 {
        margin-left: 170px;

    }  
    .btnPg{
        margin-left: 500px;
        width: 25%;
    }
</style>

</head>

<body>
<?php include_once 'navbar.php'; ?>
<br>

<?php


if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true) {
    // O usuário está logado, exiba o ID do usuário
    echo "ID do usuário logado: " . $_SESSION['usuario_id'];
} else {
    // O usuário não está logado, redirecione para a página de login
    header('Location: login.php');
    exit;
}
?>

    <h1 class="text-center">Pagamento</h1>

    <?php if (verificarLogin()) : ?>
        <br><br>
        <h2  class="m-7">Dados do Usuário</h2>
        <table class="table table-bordered w-75 mx-auto">
            <tr class="text-center">
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
            </tr>
            <tr  class="text-center">
            <td ><?php echo $_SESSION['nome_usuario']; ?></td>     
            <td><?php echo $_SESSION['sobrenome_usuario']; ?></td>
            <td><?php echo $_SESSION['email_usuario']; ?></td>            
            </tr>
        </table>
<br>
        <h2  class="m-7">Detalhes da Compra</h2>
        <table class="table table-bordered mx-auto border-dark w-75">
            <tr >
                <th>Nome do Produto</th>
                <th>Preço</th>
            </tr>
            <?php foreach ($produtosNoCarrinho as $produto) : ?>
                <tr>
                    <td><?php echo $produto['nome']; ?></td>
                    <td><?php echo $produto['preco']; ?></td>
                </tr>
            <?php endforeach; ?>
            <td><h6>Total da Compra</h6></td>
            <td class="d-flex "><h6> <?php echo number_format($valorTotal, 2, ',', '.'); ?>R$</h6><button type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"class="btn btn-primary btn-sm btnPg text-dark" >Pagar</button></td>
        </table>

    <!-- modal tipos de pagamento -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Forma de pagamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <button type="button" class="btn btn-outline-primary me-5" data-bs-toggle="modal" data-bs-target="#formCad">Pix</button>
      <button type="button" class="btn btn-outline-primary me-5">A vista</button>
      <button type="button" class="btn btn-outline-primary">A vista</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!-- modal formulario cadastro -->

<div class="modal fade" id="formCad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="clienteForm" action="processapagamento.php" method="POST" class="row g-3">
    <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label for="cep" class="form-label">CEP:</label>
        <div class="input-group">
            <input type="text" id="cep" name="cep" class="form-control" required>
            <button type="button" id="buscarCep" class="btn btn-primary">Buscar CEP</button>
        </div>
    </div>
    <div class="col-md-6">
        <label for="email_contato" class="form-label">Email de Contato:</label>
        <input type="email" id="email_contato" name="email_contato" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" id="cpf" name="cpf" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label for="rua" class="form-label">Rua:</label>
        <input type="text" id="rua" name="rua" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade:</label>
        <select id="cidade" name="cidade" class="form-select" required>
            <option value="">Selecione uma cidade</option>
            <!-- As opções serão preenchidas via JavaScript -->
        </select>
    </div>
    <div class="col-md-6">
        <label for="estado" class="form-label">Estado:</label>
        <select id="estado" name="estado" class="form-select" required>
            <option value="">Selecione um estado</option>
            <!-- As opções serão preenchidas via JavaScript -->
        </select>
    </div>
    <div class="col-md-6">
        <label for="bairro" class="form-label">Bairro:</label>
        <input type="text" id="bairro" name="bairro" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label for="numero" class="form-label">Número:</label>
        <input type="text" id="numero" name="numero" class="form-control" required>
    </div>
    <div class="col-md-6">
        <label for="complemento" class="form-label">Complemento:</label>
        <input type="text" id="complemento" name="complemento" class="form-control">
    </div>
    <div class="col-md-12">
        <input type="submit" value="Cadastrar Cliente" class="btn btn-primary">
    </div>
</form>
      </div>
    </div>
  </div>
</div>
    <?php else : ?>
        <p>Você precisa estar logado para acessar esta página.</p>
    <?php endif; ?>


   



   

    <script>
        // script.js

document.addEventListener('DOMContentLoaded', function () {
    const cepInput = document.getElementById('cep');
    const ruaInput = document.getElementById('rua');
    const cidadeSelect = document.getElementById('cidade');
    const estadoSelect = document.getElementById('estado');

    cepInput.addEventListener('blur', function () {
        const cep = cepInput.value.replace(/\D/g, '');

        if (cep.length !== 8) {
            alert('CEP inválido. Digite os 8 dígitos do CEP.');
            return;
        }

        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                if (data.erro) {
                    alert('CEP não encontrado.');
                } else {
                    ruaInput.value = data.logradouro;
                    cidadeSelect.innerHTML = `<option value="${data.localidade}">${data.localidade}</option>`;
                    estadoSelect.innerHTML = `<option value="${data.uf}">${data.uf}</option>`;
                }
            })
            .catch(error => {
                console.error('Erro ao buscar CEP:', error);
            });
    });
});

    </script>
</body>

</html>