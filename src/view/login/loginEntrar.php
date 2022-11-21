<h1 class="title">Login Petcare</h1>

<form action="" class="pt-3" method="POST">
    <div class="form-floating">
        <input type="text" class="form-control" name="email" id="email" onblur="validarEmail()">
        <label id="lblemail" for="email">Digite o seu email cadastrado</label>
        <div id="container-email">

        </div>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="senha" id="senha" onblur="validarSenha()">
        <label id="lblsenha" for="senha">Digite a sua senha</label>
        <div id="container-senha">

        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary" onclick="loginJs.fEntrar()">Entrar</button>
    </div>
</form><br><br>
<p>Não tem cadastro? <a href="javascript:void(0)" onclick="loginJs.fPagCadastro()"><u>Clique aqui</u></a></p>
<?php include_once('loginJs.php') ?>