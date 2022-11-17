<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="site-wrap d-md-flex align-items-stretch">
        <div class="bg-img" style="background-image: url(/assets/img/logo.svg)">
        </div>
        <div class="form-wrap">
            <div class="form-inner">
                <h1 class="title">Login Petcare</h1>

                <form action="" class="pt-3" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="" id="email" onblur="validarLogin()">
                        <label id="lblemail" for="email">Digite o seu email cadastrado</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" name="" id="senha" onblur="validarSenha()">
                        <label id="lblsenha" for="senha">Digite a sua senha</label>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary" onclick="ultimaValidacao()">Entrar</button>
                    </div>
                </form><br><br>
                    <p>Não tem cadastro? <a href="javascript:void(0)" onclick=""><u>Clique aqui</u></a></p>
                    
                <div class="form-check form-switch">
                    
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="toggle()">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Modo noturno</label>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>