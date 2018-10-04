<?php

error_reporting(E_ALL & ~E_NOTICE);
session_start();
include '../static/head.php';
include '../static/nav.php';


?>

<div class = "container">
  <div class = "row">
    <div class = "col-md-6">
      <div class = "card">
          <div class =  "card-header bg-white">Cadastro</div>
          <div class = "card-body">
              <h3><i class = "fa fa-address-card"></i> Cadastrar Funcionário</h3>
              <hr>
              <b>Versão 1.1</b>
              <br><br>
              <p>Preencha os campos abaixo para cadastrar um novo Funcionário</p>
              <form action = "cad_cliente.php" method = "post">
                  <!-- Modelo -->
                  <div class  ="input-group mb-3">
                  <select class="form-control" name="loja">
                    <option value="1">Selecione uma Loja</option>
                    <?php
                      include_once('../dbconn.php');
                      $sql = "SELECT * FROM lojas";
                      $result = mysqli_query($conn, $sql);

                      while($row = mysqli_fetch_array($result)){
                        ?>
                        <option value="<?=$row['id_loja'];?>" class = "form-control"><?=$row['nome_loja'];?></option>
                    <?php
                      }
                    ?>
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
                  <button href="produto.php" type = "submit" class = "btn btn-success" name = "submit">Avançar</button>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
