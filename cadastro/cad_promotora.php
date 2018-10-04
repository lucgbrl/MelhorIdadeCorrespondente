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
        <div class =  "card-header bg-white">Cadastro de Promotora</div>
          <div class = "card-body">
            <h3><i class = "fa fa-address-card"></i> Criar nova Promotora</h3>
            <hr>
            <b>Versão 1.1</b>
            <br><br>
            <p>Preencha o formulário para cadastrar uma nova Promotora!</p>
            <form action = "home.php" method = "post">
                <!-- Modelo -->
              <div class = "input-group mb-3">
                <label for="nome_cli" class = "form-control col-md-3">Promotora</label>
                <input type="text" class = "form-control" name = "nome_promotora">
              </div>
            <button href="home.php" type = "submit" class = "btn btn-success" name = "submit">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
