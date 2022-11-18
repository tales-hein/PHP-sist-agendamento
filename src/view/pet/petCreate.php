<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pet</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cadastro / Pet</li>
        </ol>
        <div class="row">
            <div class="col-xl-6">
                <div class="card xl-4">
                    <div class="card-header">
                        <p><i class="fas fa-dog"></i>&ensp;Novo cadastro de pet: </p>
                    </div>
                    <div class="card-body">
                        <form id="formPetCreate" action="">
                            <div id="containermodal">

                            </div>
                            <input type="hidden" name="action" value="inserir">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome do Pet" value="<?= $objPet->getNome() ?>">
                                    </div>
                                    <div id="container-nome">

                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">CPF do dono:</label>
                                        <input type="text" class="form-control" name="dono" id="formGroupExampleInput2" placeholder="CPF do dono" value="<?= $objPet->getCpfDono() ?>">
                                    </div>
                                    <div id="container-dono">

                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <label for="especie">Espécie:</label>
                                    <div>
                                        <label for="cachorro" class="form-check-label"><input type="radio" class="form-check-input" name="especie" id="cachorro" value="c">&ensp;Cachorro</label>
                                        <label for="gato" class="form-check-label"><input type="radio" class="form-check-input" name="especie" id="gato" value="g">&ensp;Gato</label>
                                        <label for="ave" class="form-check-label"><input type="radio" class="form-check-input" name="especie" id="ave" value="a">&ensp;Ave</label>
                                        <label for="exotico" class="form-check-label"><input type="radio" class="form-check-input" name="especie" id="exotico" value="e">&ensp;Exótico</label>
                                    </div>
                                    <div id="container-especie">

                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Raça:</label>
                                        <input type="text" class="form-control" name="raca" id="formGroupExampleInput" placeholder="Raça do pet" value="<?= $objPet->getRaca() ?>">
                                    </div>
                                    <div id="container-raca">

                                    </div>
                                </li>
                            </ul>
                        </form>

                    </div>
                    <div class="card-footer">
                        <div class="float-end">
                            <button class="btn btn-secondary" onclick="petJs.fVoltar()">Voltar</button>
                            <button class="btn btn-secondary">Limpar</button>
                            <button class="btn btn-primary" onclick="petJs.fSalvar()">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>