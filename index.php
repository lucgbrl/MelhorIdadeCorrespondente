<?php
     session_start();
     error_reporting(E_ALL & ~E_NOTICE);
     include 'static/head.php';
     include 'static/nav.php';

     $nome_loja = $_POST['nome_loja'];
     $uf = $_POST['uf'];
     $cidade = $_POST['cidade'];
     $bairro = $_POST['bairro'];
     $rua = $_POST['rua'];
     $cep = $_POST['cep'];
     $numero = $_POST['numero'];
     $fone_loja = $_POST['fone_loja'];
 
         include_once('dbconn.php');
         $sql = "INSERT INTO enderecos (uf, cidade, bairro, rua, cep, numero) VALUES ('$uf', '$cidade', '$bairro', '$rua', '$cep', '$numero')";
         $result = mysqli_query($conn, $sql);
         
         if (mysqli_query($conn, $sql)) 
         {
             $last_id = mysqli_insert_id($conn);
             $sqli = "INSERT INTO lojas (id_add, nome_loja, fone_loja) VALUES ('$last_id', '$nome_loja', '$fone_loja',)";
             mysqli_query($conn, $sqli);
         } 
         else 
         {
             mysqli_error($conn);
         }
 

?>

<div class = "container align-center">
    <div class = "row">
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
                    </div>
                </div>
        </div>

        <div class = "col-md-6">

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
            <div class = "card-header">
                Criar nova loja
            </div>
            <div class = "card-body">
                <h3><i class = "fa fa-address-card"></i> Criar nova loja</h3>
                <hr>
                <p>Clique no botão abaixo para ser redirecionado</p>
                <a class = "btn btn-success btn-block" href = "cad_loja.php">Cadastrar nova loja</a></button>
            </div>
          </div>
        </div>

        <div class = "col-md-3">
        </div>
    <!-- End section-->
    </div>
</div>
