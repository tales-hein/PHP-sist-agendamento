<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Usuários</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cadastro / Usuário</li>
        </ol>
        <div class="row">
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <p><i class="fas fa-user"></i>&ensp;Lista de usuários cadastrados: </p>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <button class="btn btn-primary" type="button" onclick="userJs.fNovo()">Novo</button>
                        </form>
                        <div id="divUserLista">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan='2'>#</th>
                                        <th colspan='2'>Nome</th>
                                        <th colspan='2'>E-mail</th>
                                        <th colspan='2'>Telefone</th>
                                        <th colspan='2'>CPF</th>
                                        <th colspan='2'>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include_once(__AGENDAMENTO_DIR__ . 'src/view/user/listagemUser.php') ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>