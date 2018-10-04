<?php
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();

  include 'static/head.php';
  include 'static/nav.php';

?>
<div class = "container">
  <div class = "row">
    <div class = "col-md-12 justify-content-center">

        <table class = "table table-stripped table-bordered">
          <thead>
            <tr>
              <th>Código</th>
              <th>Cliente</th>
              <th>CPF</th>
              <th>Banco</th>
              <th>Orgão</th>
              <th>Produto</th>
              <th>Prazo</th>
              <th>Corretor/Vendedor</th>
            </tr>
          </thead>
          <tbody>
            <?php

              include_once('dbconn.php');

              $sql = "SELECT * FROM clientes UNION SELECT * FROM bancos UNION SELECT * FROM orgaos UNION SELECT * FROM produtos UNION SELECT * FROM prazos UNION SELECT * FROM funcionarios";
              $result = mysqli_query($conn, $sql);

              while($row = mysqli_fetch_array($result)){
            ?>
              <tr>
                <td><?=$row['id_cli'];?></td>
                <td><?=$row['nome_cli'];?></td>
                <td><?=$row['cpf_cli'];?></td>
                <td><?=$row['nome_banco'];?></td>
                <td><?=$row['nome_orgao'];?></td>
                <td><?=$row['nome_produto'];?></td>
                <td><?=$row['num_parcelas'];?></td>
                <td><?=$row['nome_fun'];?></td>
              </tr>
            <?php
              }
            ?>

          </tbody>
        </table>

    </div>
  </div>
</div>
