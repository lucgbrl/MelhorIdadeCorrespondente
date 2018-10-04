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
      <div class  = "card">
          <div class = "card-header">Leia-me</div>
          <div class = "card-body">
              <h3><i class  = "fa fa-file-contract"></i> Revisão dos dados do Cliente</h3>
              <hr>
              <b>Versão 1.0.0.a</b>
              <br><br>
              <p>Titulo</p>
              <ul class = "list-group">
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Informações do Cliente</h5>
                  <small>Admin</small>
                  </div>
                  <p class="mb-1"><?=$produto;?></p>
                  <small>Na esteira.</small>
              </a>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Nome</b></div>
                      <div class = "col-md-9"><?=$nome_cli;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>CPF</b></div>
                      <div class = "col-md-9"><?=$cpf_cli;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>RG</b></div>
                      <div class = "col-md-9"><?=$rg_cli;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Endereço</b></div>
                      <div class = "col-md-9"><?=$add_cli;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Numero</b></div>
                      <div class = "col-md-9"><?=$add_num_cli;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Telefone</b></div>
                      <div class = "col-md-9"><?=$telefone_cli;?></div>
                    </div>
                  </li>
              </ul>
          </div>
          <div class="card-footer">
            <a href="produto.php">Selecione um produto</a>
          </div>
      </div>
    </div>
  </div>
</div>
