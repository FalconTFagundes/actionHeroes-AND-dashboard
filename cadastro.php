<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.2);

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
            /* Diminuição em 30% do tamanho atual */
            margin: 0 auto;
            /* Centralizar o formulário horizontalmente */
            box-sizing: border-box;
            padding: 25px;
            border: 2px solid #f5ba1a;
            /* Borda sólida de 2px */
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 1.5em;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input,
        select {
            margin-bottom: 15px;
            padding: 8px 10px;
            height: 35px;
            border: 1px solid #cccccc;
            outline: none;
            transition: all 0.30s ease-in-out;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="date"] {
            margin-bottom: 15px;
            padding: 8px 10px;
            height: 35px;
            border: 1px solid #cccccc;
            outline: none;
            transition: all 0.30s ease-in-out;
        }

        input[type="submit"] {
            background: #f5ba1a;
            color: #fff;
            cursor: pointer;
            font-size: 1.1em;
            border: none;
        }

        input[type="submit"]:hover {
            background: darken(#f5ba1a, 7%);
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
</head>

<body>
    <br>


    <div class="form-container ">
        <div class="header">
            <h1>Registration Form</h1>
        </div>
        <br>
        <br>
        <form id="cadastroCliente" action="cadastrar.php" method="POST">


            <input type="text" name="nomeCliente" placeholder="Digite seu nome" required>
            <input type="text" name="sobrenomeCliente" placeholder="Digite seu sobrenome" required>
            <input type="email" name="emailCliente" placeholder="Digite seu Email" required>
            <input type="password" name="senhaCliente" placeholder="Digite sua senha" required>
            <input type="password" name="confirmsenhaCli" placeholder="Confirme sua senha" required>
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

            <input type="submit" value="Cadastrar">

        </form>
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
</body>

</html>