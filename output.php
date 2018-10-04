<?php
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include 'head.php';
  include 'nav.php';


?>

<div class = "container">
  <div class = "row">
    <div class = "col-md-10 justify-content-center">
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
