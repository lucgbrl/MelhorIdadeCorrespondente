<?php
     error_reporting(E_ALL & ~E_NOTICE);
     session_start();
     include 'head.php';
     include 'nav.php';

?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-6">
            <div class = "card">
                <div class =  "card-header bg-white">Cadastro de Funcionário  </div>
                <div class = "card-body">
                    <h3><i class = "fa fa-address-card"></i> Cadastrar Funcionário</h3>
                    <hr>
                    <b>Versão 1.1</b>
                    <br><br>
                    <p>Preencha os campos abaixo para cadastrar um novo Funcionário</p>
                    <form action = "processa.php" method = "post">
                        <!-- Modelo -->
                        <div class = "input-group mb-3">
                          <?php
                               include_once('dbconn.php');

                               $sql = "SELECT * FROM lojas";
                               $result = mysqli_query($conn, $sql);
                          ?>
                          <select class="form-control mb-3" name="id_loja" required>
                            <option value="1">Selecione uma Loja</option>
                              <?php
                                while($row = mysqli_fetch_array($result)){
                                  $nome_loja = $row['nome_loja'];
                                  ?>
                                <option value="<?=$id_loja;?>"><?=$nome_loja;?></option>
                              <?php }?>
                            </select>

                        </div>
                        <div class = "input-group mb-3">
                            <label for="nome_cli" class = "form-control col-md-3">Nome</label>
                            <input type="text" class = "form-control" name = "nome_fun">
                        </div>
                        <!-- End of Modelo -->
                        <div class = "input-group mb-3">
                            <label for="cpf_cli" class = "form-control col-md-3">CPF</label>
                            <input type="text" class = "form-control" name = "cpf_fun">
                        </div>
                        <!-- Numérico -->
                        <div class = "input-group mb-3">
                            <label for="rg_cli" class = "form-control col-md-3">RG</label>
                            <input type="text" class = "form-control" name = "rg_fun">
                        </div>
                        <!-- Numérico -->
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Estado (UF)</label>
                            <input type="text" class = "form-control" name = "uf_fun">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Cidade</label>
                            <input type="text" class = "form-control" name = "cidade_fun">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Endereço</label>
                            <input type="text" class = "form-control" name = "add_fun">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Numero</label>
                            <input type="text" class = "form-control" name = "add_num_fun">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="telefone_cli" class = "form-control col-md-3">Telefone</label>
                            <input type="text" class = "form-control" name = "telefone_fun">
                        </div>
                        <button href="produto.php" type = "submit" class = "btn btn-success" name = "insert">Cadastrar</button>
                    </form>
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
        </div>
    <!-- End section-->
    </div>
</div>
