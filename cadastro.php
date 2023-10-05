<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url(./img/pageCadastro.jpg);

        }

        .header {
            background-color: #f5ba1a;
            ;
            padding: 10px;
            text-align: center;
        }

        .form-container {
            background: #fff;
            width: 70%;
            margin: auto;
            box-sizing: border-box;
            padding: 25px;
            border: 2px solid #f5ba1a;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        }


        h2 {
            font-size: 1.5em;
            text-align: center;
            margin-bottom: 20px;
        }

        .cadastroCliente {
            display: flex;
            flex-direction: column;
        }

        .btnCadastrar[type="submit"] {
            background: #f5ba1a;
            color: #fff;
            cursor: pointer;
            font-size: 1.1em;
            border: none;
            padding: 2% 2%;
            text-align: center;
        }

        .btnCadastrar[type="submit"]:hover {
            background: darkgoldenrod;

        }

        .credit {
            text-align: center;
            margin-top: 20px;
            color: #f5ba1a;
        }

        .credit a {
            color: darken(#f5ba1a, 7%);
        }

        #mensagem-sucesso {
            display: none;
            color: green;
            /* Estilo opcional para a mensagem de sucesso */
        }
    </style>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>


<body>
    <?php include_once 'navbar.php'; ?>
    <br>
    <div class="container">

        <div class="form-container">
            <div class="header">
                <h1>REGISTRO</h1>
            </div>
            <br>
            <br>

            <form id="cadastroCliente" class="cadastroCliente" action="cadastrar.php" method="POST">
                <div class="mb-3">
                    <label for="nomeCliente" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" aria-describedby="nomeCliente" required>
                  
                </div>
                <div class="mb-3">
                    <label for="sobrenomeCliente" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenomeCliente" id="sobrenomeCliente" aria-describedby="sobrenomeCliente" required>
                </div>
                <div class="mb-3">
                    <label for="emailCliente" class="form-label">Email</label>
                    <input type="email" name="emailCliente" class="form-control" id="emailCliente" aria-describedby="emailCliente" required>
                    <div id="emailHelp" class="form-text">Seu email não será compartilhado com ninguém.</div>
                </div>
                <div class="mb-3">
                    <label for="senhaCliente" class="form-label">Senha</label>
                    <input type="password" name="senhaCliente" class="form-control" id="senhaCliente" required>
                </div>
                <div class="mb-3">
                    <label for="confirmsenhaCli" class="form-label">Confirme sua Senha</label>
                    <input type="password" class="form-control" name="confirmsenhaCli" id="confirmsenhaCli" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Permissão de leitura de informações</label>
                </div>
                <button type="submit" class="btn btn-primary btnCadastrar">Submit</button>
            </form>
            <!-- <form id="cadastroCliente" class="cadastroCliente" action="cadastrar.php" method="POST">
                <input type="text" name="nomeCliente" placeholder="Digite seu nome" required>
                <input type="text" name="sobrenomeCliente" placeholder="Digite seu sobrenome" required>
                <input type="email" name="emailCliente" placeholder="Digite seu Email" required>
                <input type="password" name="senhaCliente" placeholder="Digite sua senha" required>
                <input type="password" name="confirmsenhaCli" placeholder="Confirme sua senha" required> -->
            <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
            <!-- <input type="tel" name="celCliente" placeholder="Número de telefone" required>
            <div>
                <input type="radio" name="generoCliente" id="genero-hetero" value="hetero" checked>
                <label for="hetero">Hetero</label>
                <input type="radio" name="generoCliente" id="gender-nao-hetero" value="nao-hetero">
                <label for="nao-hetero">Não hetero</label>
            </div>
            <input type="text" name="ruaCliente" placeholder="Nome da rua" required>
            <input type="text" name="cidadeCliente" id="city-list" list="cities" placeholder="Cidade" required>
            <datalist id="cities"></datalist>
            <input type="text" name="estadoCliente" id="state-list" list="states" placeholder="Estado" required>
            <datalist id="states"></datalist> -->

            <!-- <div id="country-error"></div>
            <input type="date" name="dataNasc" placeholder="Data de nascimento" required> -->
            <!-- 
                <button class="btnCadastrar" type="submit">CADASTRAR </button>
            </form> -->
        </div>
        <div id="mensagem-sucesso" style="display: none;">
            Dados cadastrados com sucesso!
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const cityList = document.getElementById("cities");
                const cityInput = document.getElementById("city-list");

                //  API do IBGE cidades brasileiras
                fetch("https://servicodados.ibge.gov.br/api/v1/localidades/municipios")
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(city => {
                            const option = document.createElement("option");
                            option.value = city.nome;
                            cityList.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error("Erro ao buscar cidades:", error);
                    });

                // Adicione um ouvinte de evento para filtrar as cidades conforme o usuário digita
                cityInput.addEventListener("input", function() {
                    const inputValue = cityInput.value.toLowerCase();
                    const options = cityList.querySelectorAll("option");

                    options.forEach(option => {
                        const cityName = option.value.toLowerCase();
                        if (cityName.includes(inputValue)) {
                            option.style.display = "block";
                        } else {
                            option.style.display = "none";
                        }
                    });
                });
            });


            document.addEventListener("DOMContentLoaded", function() {
                const stateList = document.getElementById("states");
                const stateInput = document.getElementById("state-list");

                // Use a API do IBGE lista de estados brasileiros
                fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(state => {
                            const option = document.createElement("option");
                            option.value = state.nome;
                            stateList.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error("Erro ao buscar estados:", error);
                    });

                // Adicione um ouvinte de evento para filtrar os estados conforme o usuário digita
                stateInput.addEventListener("input", function() {
                    const inputValue = stateInput.value.toLowerCase();
                    const options = stateList.querySelectorAll("option");

                    options.forEach(option => {
                        const stateName = option.value.toLowerCase();
                        if (stateName.includes(inputValue)) {
                            option.style.display = "block";
                        } else {
                            option.style.display = "none";
                        }
                    });
                });
            });
        </script>
        <script src="js/main.js"></script>

    </div>
</body>

</html>