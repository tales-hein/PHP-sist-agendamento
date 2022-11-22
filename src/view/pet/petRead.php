<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pets</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cadastro / Pets</li>
        </ol>
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <p><i class="fas fa-dog"></i>&ensp;Lista de pets cadastrados: </p>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <button class="btn btn-primary" type="button" onclick="petJs.fNovo()">Novo</button>
                        </form>
                        <div id="divUserLista">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan='2'>#</th>
                                        <th colspan='2'>Nome</th>
                                        <th colspan='2'>CPF do dono</th>
                                        <th colspan='2'>Raça</th>
                                        <th colspan='2'>Espécie</th>
                                        <th colspan='2'>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include_once(__AGENDAMENTO_DIR__ . 'src/view/pet/listagemPet.php') ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>