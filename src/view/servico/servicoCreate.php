<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Serviços</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cadastro / Serviço</li>
        </ol>
        <div class="row">
            <div class="col-xl-6">
                <div class="card xl-4">
                    <div class="card-header">
                        <i class="fas fa-bath"></i>
                        Novo serviço
                    </div>
                    <div class="card-body">
                        <form id="formServicoCreate" action="">
                        <?php include_once(__AGENDAMENTO_DIR__ . 'lib/alert.php') ?>
                            <input type="hidden" name="action" value="inserir">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="servico_types" class="form-label">Tipo de serviço:</label>
                                        <select class="form-select" name="servico_types" id="servico_types" form="formServicoCreate">
                                            <option value="banho">Apenas banho</option>
                                            <option value="tosa">Apenas tosa</option>
                                            <option value="banho_tosa">Banho e tosa</option>
                                            <option value="vet">Consulta veterinária</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Nome do pet:</label>
                                        <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome do Pet" value="<?= $objServico->getNome() ?>">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="formGroupExampleInput2" class="form-label">CPF do dono:</label>
                                            <input type="text" class="form-control" name="dono" id="formGroupExampleInput2" placeholder="CPF do dono" value="<?= $objServico->getDono() ?>">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>

                    </div>
                    <div class="card-footer">
                        <div class="float-end">
                            <button class="btn btn-secondary" onclick="servicoJs.fVoltar()">Voltar</button>
                            <button class="btn btn-secondary">Limpar</button>
                            <button class="btn btn-primary" onclick="servicoJs.fSalvar()">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>