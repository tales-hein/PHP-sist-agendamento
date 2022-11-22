<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="">
                <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
                Home
            </a>
            <div class="sb-sidenav-menu-heading">Painel Administrativo</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                Cadastros
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="javascript:void(0)" onclick="agendamentoJs.fCarregarMenu('user')">Usuários</a>
                    <a class="nav-link" href="javascript:void(0)" onclick="agendamentoJs.fCarregarMenu('pet')">Pets</a>
                    <a class="nav-link" href="javascript:void(0)" onclick="agendamentoJs.fCarregarMenu('servico')">Serviços</a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Painel de serviço</div>
            <a class="nav-link" href="javascript:void(0)" onclick="agendamentoJs.fCarregarMenu('email')">
                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                Email
            </a>
            <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-file-export"></i></div>
                Relatórios
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logado como:</div>
        <?= $_SESSION['email'] ?>
    </div>
</nav>