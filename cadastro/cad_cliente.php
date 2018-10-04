<?php

error_reporting(E_ALL & ~E_NOTICE);
session_start();
include '../static/head.php';
include '../static/nav.php';

$_SESSION['nome_loja'];

$nome_cli = $_POST['nome_cli'];
$cpf_cli  = $_POST['cpf_cli'];
$rg_cli = $_POST['rg_cli'];;
$telefone_cli = $_POST['telefone_cli'];
$uf_cli = $_POST['uf_cli'];
$cidade_cli=  $_POST['cidade_cli'];;
$add_cli = $_POST['add_cli'];;
$add_num_cli = $_POST['add_num_cli'];

  include_once('../dbconn.php');
  $sql = "INSERT INTO `clientes`(nome_cli, cpf_cli, rg_cli,telefone_cli,uf_cli,cidade_cli, add_cli, add_num_cli, id_fun) VALUES ('$nome_cli', '$cpf_cli', '$rg_cli', '$telefone_cli', '$uf_cli', '$cidade_cli', '$add_cli', '$add_num_cli', 1)";
  $result = mysqli_query($conn, $sql);

?>

<div class = "container">
  <div class = "row">
    <div class = "col-md-6">
      <div class = "card">
          <div class =  "card-header bg-white">Pré-Cadastro</div>
          <div class = "card-body">
              <h3><i class = "fa fa-address-card"></i> Cadastrar Cliente</h3>
              <hr>
              <b>Versão 1.1</b>
              <br><br>
              <p>Preencha os campos abaixo para cadastrar um novo contrato de crédito ou empréstimo</p>
              <form action = "cad_cliente.php" method = "post">
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
  </div>
</div>
