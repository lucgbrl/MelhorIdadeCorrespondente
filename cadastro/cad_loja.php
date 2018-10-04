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
