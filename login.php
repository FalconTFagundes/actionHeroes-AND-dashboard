<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Karla", sans-serif;
            background-color: #fff;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
           
        }

        .brand-wrapper {
            text-align: center;
            flex-grow: 1;
          margin: auto; 
            
        }

        .logo {
            max-width: 100%;
            height: auto;
            
        }

        .login-section-wrapper {
            padding: 10px 0px 0px 40px;
            background-color: #fff;
            border: none;
            border-radius: 0;
            box-shadow: none;
        }

        .login-title {
            font-size: 30px;
            color: #000;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: bold;
            color: #b0adad;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #e7e7e7;
            border-radius: 0;
            padding: 9px 5px;
            min-height: 40px;
            font-size: 18px;
            font-weight: normal;
        }

        .login-btn {
            padding: 13px 20px;
            background-color: #fdbb28;
            border-radius: 0;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 14px;
            border: none;
        }

        .login-btn:hover {
            background-color: #fff;
            color: #fdbb28;
        }

        .forgot-password-link {
            color: #080808;
            font-size: 14px;
            text-decoration: underline;
            display: inline-block;
            margin-bottom: 54px;
        }

        .login-wrapper-footer-text {
            font-size: 16px;
            color: #000;
            margin-bottom: 0;
        }

        .login-img {
            max-width: 100%;
            height: auto;
        }

        .fundoimage {
    display: flex;
    justify-content: center; /* Centraliza horizontalmente */
    align-items: center; /* Centraliza verticalmente */
    background-color: gray; /* Cor de fundo cinza */
    padding: 30px; /* Espaçamento interno de 30px para a borda */
    margin-left: 150px;
    width: 70%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.2);
}

.login-img-wrapper {
    
    height: 80vh;
}
main{
    height: 80vh;
}
.login-img {
    width: 95%; /* Torna a imagem 5% menor que a largura do contêiner pai */
}





    </style>
</head>

<body>
    <main class="">
        <div class="brand-wrapper ">
            <img src="./img/logotipo/logoActionHeroesSemFundo.png" class="logo">
        </div>
        <div class="login-section-wrapper">
            <h1 class="login-title">Log in</h1>
            <form>
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="User name">
                </div>
                <div class="form-group mb-4">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" class="form-control" placeholder="Enter your password">
                </div>
                <button id="login" class="btn btn-block login-btn">Login</button>
            </form>
            <a href="#!" class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
    </main>
    <div class="fundoimage">
        <div class="login-img-wrapper">
            <img src="./img/imagensDoWiderson/Estatua Iron man2.png" alt="login image" class="login-img">
        </div>
    </div>
</body>

</html>
