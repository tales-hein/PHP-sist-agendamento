<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Usuário</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cadastro / Usuário</li>
        </ol>
        <div class="row">
            <div class="col-xl-12">
                <div class="card xl-4">
                    <div class="card-header">
                        <p> <i class="fas fa-user"></i>&emsp;Novo usuário</p>
                    </div>
                    <div class="card-body">
                        <form id="formUserCreate" action="">
                            <div id="containermodal">

                            </div>
                            <input type="hidden" name="action" value="inserir">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome" value="<?= $objUser->getNome() ?>">
                                        <div id="container-nome">

                                        </div>
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
                        </form>


                    </div>
                    <div class="card-footer">
                        <div class="float-end">
                            <button class="btn btn-secondary" onclick="userJs.fVoltar()">Voltar</button>
                            <button class="btn btn-secondary" onclick="userJs.fZerar()">Limpar</button>
                            <button class="btn btn-primary" onclick="userJs.fSalvar()">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>