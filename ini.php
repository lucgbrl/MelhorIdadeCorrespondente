<?php
     error_reporting(E_ALL & ~E_NOTICE);
     session_start();
     include 'static/head.php';
     include 'static/nav.php';



     /*if($_POST['submit_c']){
       include_once('dbconn.php');
       $sql = "INSERT INTO lojas (nome_loja, add_loja, add_num_loja, telefone_loja, bairro_loja ) VALUES('$nome_loja','$add_loja','$add_num_loja', '$telefone_loja' ,'$bairro_loja')";
       mysqli_query($conn, $sql);
     }*/
?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-3"></div>
        <div class = "col-md-6">
          <div class = "card">
              <div class = "card-body center">
                    <h3>Seja bem vindo <b><?=$_POST['user_name'];?></b>!</h3>
                    <hr>
                      Selecione uma loja para prosseguir
              </div>
          </div>
          <div class = "card">
              <div class = "card-body">
                  <h3>Loja</h3>
                  <hr>
                  <?php
                       include_once('dbconn.php');

                       $sql = "SELECT * FROM lojas";
                       $result = mysqli_query($conn, $sql);
                  ?>
                  <p>Selecione uma loja</p>

                  <form class="" action="home.php" method="post">
                    <select class="form-control mb-3" name="loja" required>
                      <option value="1">Selecione uma Loja</option>

                      <?php

                        while($row = mysqli_fetch_array($result)){
                          $nome_loja = $row['nome_loja'];
                      ?>
                        <option value="<?=$nome_loja;?>"><?=$nome_loja;?></option>
                      <?php }?>
                    </select>
                    <input type="submit" name="submit_s" value="Selecionar" class = "btn btn-primary btn-block">
                  </form>
              </div>
          </div>

          <div align = "center" class = "mb-3">
              ou

          </div>
            <div class = "card">
                <div class =  "card-header bg-white">Cadastro de Loja</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-address-card"></i> Criar nova Loja</h3>
                    <hr>
                    <b>Versão 1.1</b>
                    <br><br>
                    <p>Preencha o formulário para cadastrar uma nova loja!</p>
                    <form action = "home.php" method = "post">
                        <!-- Modelo -->
                        <div class = "input-group mb-3">
                            <label for="nome_cli" class = "form-control col-md-3">Loja</label>
                            <input type="text" class = "form-control" name = "nome_loja">
                        </div>
                        <!-- End of Modelo -->
                        <div class = "input-group mb-3">
                            <label for="add_loja" class = "form-control col-md-3">Endereço</label>
                            <input type="text" class = "form-control" name = "add_loja">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="bairro_loja" class = "form-control col-md-3">Bairro</label>
                            <input type="text" class = "form-control" name = "bairro_loja">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="add_num_loja" class = "form-control col-md-3">Numero</label>
                            <input type="text" class = "form-control" name = "add_num_loja">
                        </div>
                        <div class = "input-group mb-3">
                            <label for="telefone_loja" class = "form-control col-md-3">Telefone</label>
                            <input type="text" class = "form-control" name = "telefone_loja">
                        </div>
                        <button href="home.php" type = "submit" class = "btn btn-success" name = "submit_c">Cadastrar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
