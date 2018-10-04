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
        <div class =  "card-header bg-white">Cadastro de Banco</div>
          <div class = "card-body">
            <h3><i class = "fa fa-address-card"></i> Criar novo Banco</h3>
            <hr>
            <b>Versão 1.1</b>
            <br><br>
            <p>Preencha o formulário para cadastrar um novo Banco!</p>
            <form action = "home.php" method = "post">
                <!-- Modelo -->
              <div class = "input-group mb-3">
                <label for="nome_cli" class = "form-control col-md-3">Banco</label>
                <input type="text" class = "form-control" name = "nome_banco">
              </div>
            <button href="home.php" type = "submit" class = "btn btn-success" name = "submit_c">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
