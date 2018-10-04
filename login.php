<?php
     session_start();
     error_reporting(E_ALL & ~E_NOTICE);
     include 'static/head.php';
     include 'static/nav.php';
?>

<div class = "container align-center">
    <div class = "row justify-content-center">
        <div class = "col-md-5">
            <div class = "card">
                <div class =  "card-header bg-white">Login</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-address-card"></i> Login Melhor Idade</h3>
                    <hr>
                    <b>Versão 1.1.rca</b>
                    <br><br>
                    <p>Preencha o formulário para acessar o sistema</p>
                    <form action = "ini.php" method = "post">
                        <!-- Modelo -->
                        <div class = "input-group mb-3">
                            <label for="nome_cli" class = "form-control col-md-3">Usuário</label>
                            <input type="text" class = "form-control" name = "user_name">
                        </div>
                        <!-- End of Modelo -->
                        <div class = "input-group mb-3">
                            <label for="cpf_cli" class = "form-control col-md-3">Password </label>
                            <input type="password" class = "form-control" name = "user_password">
                        </div>
                        <button href="ini.php" type = "submit" class = "btn btn-primary  btn-block" name = "submit">Login</button>
                    </form>
                </div>
                <div class="card-footer">
                  <a href="#">Esqueci minha senha</a>
                </div>
            </div>
        </div>

        <!--div class = "col-md-3">
            <div class = "card">
                <div class =  "card-header">Ajuda</div>
                    <div class = "card-body">
                        <form action = "" method = "post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ajuda" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon1"><i class = "fa fa-search text-primary"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class = "text-secondary">Busque por termos: Ex.: Borderô</p>
                        <ul class = "list-group">
                            <li class = "list-group-item">Contratos</li>
                            <li class = "list-group-item">Pesquisas</li>
                            <li class = "list-group-item">Guias</li>
                        </ul>
                </div>
            </div>
        </div-->
    <!-- End section-->
    </div>
</div>
