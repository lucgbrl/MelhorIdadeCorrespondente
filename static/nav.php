<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class = "container">
        <a class="navbar-brand" href="#"><i class = "fa fa-money-check-alt"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastrar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./cadastro/cad_cliente.php">Cliente</a>
                    <a class="dropdown-item" href="cad_funcionario.php">Funcionário</a>
                    <a class="dropdown-item" href="cad_loja.php">Loja</a>
                    <a class="dropdown-item" href="cad_promotora.php">Promotora</a>
                    <a class="dropdown-item" href="cad_banco.php">Banco</a>
                    <a class="dropdown-item" href="cad_orgao.php">Orgão</a>
                    <a class="dropdown-item" href="cad_parcelas.php">Parcelamento</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="home.php" id = "navbarDropdown" role = "button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Movimento</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="lista_contratos.php">Aprovados</a>
                    <a class="dropdown-item" href="lista_contratos.php">Aprovados/Pagos</a>
                    <a class="dropdown-item" href="lista_contratos.php">Na esteira</a>
                    <a class="dropdown-item" href="lista_contratos.php">Todos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="revisao.php">Borderô</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Comissões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Notas Fiscais</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
