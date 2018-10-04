<?php
     session_start();
     error_reporting(E_ALL & ~E_NOTICE);
     include 'static/head.php';
     include 'static/nav.php';

?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-3">
            <div class = "card">
                <div class =  "card-header">Ajuda</div>
                    <div class = "card-body">
                        <form action = "index.php" method = "post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ajuda" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon1"><i class = "fa fa-search text-primary"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

        <div class = "col-md-6">
            <div class = "card">
                <div class =  "card-header bg-white">Cadastro de Loja</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-address-card"></i> Criar nova Loja</h3>
                    <hr>
                    <b>Versão 1.1</b>
                    <br><br>
                    <p>Preencha o formulário para cadastrar uma nova loja!</p>
                    <form action = "index.php" method = "post">
                        <!-- Modelo -->
                        <div class = "input-group mb-3">
                            <label for="nome_cli" class = "form-control col-md-3">Loja</label>
                            <input type="text" class = "form-control" name = "nome_loja">
                        </div>
                        <!-- End of Modelo -->
                        <div class = "input-group mb-3">
                            <label for="add_loja" class = "form-control col-md-3">Estado</label>
                            <input type="text" class = "form-control" name = "uf">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_loja" class = "form-control col-md-3">Cidade</label>
                            <input type="text" class = "form-control" name = "uf">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="bairro_loja" class = "form-control col-md-3">Bairro</label>
                            <input type="text" class = "form-control" name = "bairro">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_loja" class = "form-control col-md-3">Rua</label>
                            <input type="text" class = "form-control" name = "rua">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_loja" class = "form-control col-md-3">CEP</label>
                            <input type="text" class = "form-control" name = "cep">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_num_loja" class = "form-control col-md-3">Numero</label>
                            <input type="text" class = "form-control" name = "numero">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="telefone_loja" class = "form-control col-md-3">Telefone</label>
                            <input type="text" class = "form-control" name = "fone_loja">
                        </div>
                        <button href="home.php" type = "submit" class = "btn btn-success" name = "submit_c">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class = "col-md-3">
        </div>
    <!-- End section-->
    </div>
</div>
