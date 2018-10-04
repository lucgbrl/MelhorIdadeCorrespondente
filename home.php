<?php
     error_reporting(E_ALL & ~E_NOTICE);
     session_start();
     include 'static/head.php';
     include 'static/nav.php';

     $loja = $_POST['loja'];
     $nome_loja = $_POST['nome_loja'];

     $add_loja = $_POST['add_loja'];
     $add_num_loja = $_POST['add_num_loja'];
     $bairro_loja = $_POST['bairro_loja'];
     $telefone_loja = $_POST['telefone_loja'];

     if($_POST['submit_c']){
       include_once('dbconn.php');
       $sql = "INSERT INTO lojas (nome_loja, add_loja, add_num_loja, telefone_loja, bairro_loja ) VALUES('$nome_loja','$add_loja','$add_num_loja', '$telefone_loja' ,'$bairro_loja')";
       mysqli_query($conn, $sql);
     }
?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-3">
            <div class = "card">
                <div class = "card-body">
                    <h3>Admin</h3>
                    <hr>
                      Você está em <?=$_POST['loja'];?>
                </div>
            </div>

            <div class="card">
              <div class="card-header">
                Funcionário em <?=$_POST['loja'];?>
              </div>
              <div class="card-body">
                <?php
                  include_once('dbconn.php');

                  $sql = "SELECT nome_fun FROM funcionarios";
                  $result = mysqli_query($conn, $sql);

                  while($row = mysqli_fetch_array($result)){
                  ?>
                  <ul>
                    <li><?=$row['nome_fun'];?></li>
                  </ul>
                  <?php
                  }
                ?>
              </div>
            </div>
        </div>

        <div class = "col-md-6">
            <div class = "card">
                <div class =  "card-header bg-white">Pré-Cadastro</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-address-card"></i> Cadastrar Cliente</h3>
                    <hr>
                    <b>Versão 1.1</b>
                    <br><br>
                    <p>Preencha os campos abaixo para cadastrar um novo contrato de crédito ou empréstimo</p>
                    <form action = "produto.php" method = "post">
                        <!-- Modelo -->
                        <div class = "input-group mb-3">
                            <label for="nome_cli" class = "form-control col-md-3">Nome</label>
                            <input type="text" class = "form-control" name = "nome_cli">
                        </div>
                        <!-- End of Modelo -->
                        <div class = "input-group mb-3">
                            <label for="cpf_cli" class = "form-control col-md-3">CPF</label>
                            <input type="text" class = "form-control" name = "cpf_cli">
                        </div>
                        <!-- Numérico -->
                        <div class = "input-group mb-3">
                            <label for="rg_cli" class = "form-control col-md-3">RG</label>
                            <input type="text" class = "form-control" name = "rg_cli">
                        </div>
                        <!-- Numérico -->
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Estado (UF)</label>
                            <input type="text" class = "form-control" name = "uf_cli">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Cidade</label>
                            <input type="text" class = "form-control" name = "cidade_cli">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Endereço</label>
                            <input type="text" class = "form-control" name = "add_cli">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_cli" class = "form-control col-md-3">Numero</label>
                            <input type="text" class = "form-control" name = "add_num_cli">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="telefone_cli" class = "form-control col-md-3">Telefone</label>
                            <input type="text" class = "form-control" name = "telefone_cli">
                        </div>
                        <button href="produto.php" type = "submit" class = "btn btn-success" name = "insert">Avançar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class = "col-md-3">
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
