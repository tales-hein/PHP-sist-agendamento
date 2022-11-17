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
                        <i class="fas fa-dog"></i>
                        Novo pet
                    </div>
                    <div class="card-body">
                        <form id="formPetCreate" action="">
                        <?php include_once(__AGENDAMENTO_DIR__ . 'lib/alert.php') ?>
                            <input type="hidden" name="action" value="inserir">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="pet_types" class="form-label">Tipo de pet:</label>
                                        <select class="form-select" name="pet_types" id="pet_types" form="formPetCreate">
                                            <option value="cachorro">Cachorro</option>
                                            <option value="gato">Gato</option>
                                            <option value="ave">Ave</option>
                                            <option value="exotico">Exótico</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome do Pet" value="<?= $objPet->getNome() ?>">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="formGroupExampleInput2" class="form-label">CPF do dono:</label>
                                            <input type="text" class="form-control" name="dono" id="formGroupExampleInput2" placeholder="CPF do dono" value="<?= $objPet->getDono() ?>">
                                        </div>
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