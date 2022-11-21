<h3 class="title">Criação de conta Petcare</h3>
<p class="caption mb-4">Escolha os seus dados de login a seguir e cadastre-se:</p>
<p class="caption mb-4">*Lembre que a sua senha deverá conter no mínimo 8 caracteres</p>

<div>
    <form id="formUserCreate" action="">
        
        <input type="hidden" name="action" value="inserir">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome" value="<?= $objUser->getNome() ?>">
                </div>
                <div id="container-nome">

                </div>
            </li>
            <li class="list-group-item">
                <div class="row g-3">
                    <div class="col">
                        <label for="formGroupExampleInput2" class="form-label">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="formGroupExampleInput2" placeholder="Senha" value="<?= $objUser->getSenha() ?>">
                        <div id="container-senha">

                        </div>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput3" class="form-label">Confirme a sua senha:</label>
                        <input type="password" class="form-control" name="senha_confirma" id="formGroupExampleInput3" placeholder="Confirmação" value="<?= $objUser->getSenha_confirma() ?>">
                        <div id="container-confirma-senha">

                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="mb-3">
                    <label for="formGroupExampleInput4" class="form-label">E-mail:</label>
                    <input type="text" class="form-control" name="email" id="formGroupExampleInput4" placeholder="E-mail" value="<?= $objUser->getEmail() ?>">
                    <div id="container-email">

                    </div>
                </div>
            <li class="list-group-item">
                <div class="mb-3">
                    <label for="formGroupExampleInput5" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefone" id="formGroupExampleInput5" placeholder="(XX) XXXX-XXXX" value="<?= $objUser->getTelefone() ?>">
                    <div id="container-telefone">

                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="mb-3">
                    <label for="formGroupExampleInput6" class="form-label">CPF:</label>
                    <input type="text" class="form-control" name="cpf" id="formGroupExampleInput6" placeholder="CPF" value="<?= $objUser->getCpf() ?>">
                    <div id="container-cpf">

                    </div>
                </div>
            </li>
        </ul>
    </form><br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" onclick="loginJs.fCadastrar()">Cadastrar</button>
    </div><br><br>


    <p>Lembrou que já tem cadastro? <a href="javascript:void(0)" onclick="loginJs.fVoltar()"><u>Clique aqui</u></a></p>
</div>
<?php include_once('loginJs.php') ?>