<?php

  error_reporting(E_ALL & ~E_NOTICE);
  include 'static/head.php';
  include 'static/nav.php';

  $produto = $_POST['produto'];
  $valor = $_POST['valor'];
  $parcelas = $_POST['parcelas'];
  $banco = $_POST['banco'];
  $promotora = $_POST['promotora'];
  $orgao = $_POST['orgao'];

  include_once('dbconn.php');
  $sql = "INSERT INTO `contrato`(`valor_contrato`, `parcelas`, `banco`, `promotora`, `orgao`, `digitador`) VALUES  ('$valor', '$parcelas', '$banco', '$promotora', '$orgao', 'Null')";
  $result = mysqli_query($conn, $sql);

?>

<div class = "container">
  <div class = "row">
    <div class = "col-md-6">
      <div class  = "card">
          <div class = "card-header">Leia-me</div>
          <div class = "card-body">
              <h3><i class  = "fa fa-file-contract"></i> Revisão dos dados do Contrato</h3>
              <hr>
              <b>Versão 1.0.0.a</b>
              <br><br>
              <p>Titulo</p>
              <ul class = "list-group">
              <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Informações do Produto</h5>
                  <small>Admin</small>
                  </div>
                  <p class="mb-1"><?=$produto;?></p>
                  <small>Na esteira.</small>
              </a>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Produto</b></div>
                      <div class = "col-md-9"><?=$produto;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Valor</b></div>
                      <div class = "col-md-9"><?=$valor;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Parcelas</b></div>
                      <div class = "col-md-9"><?=$parcelas;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Banco</b></div>
                      <div class = "col-md-9"><?=$banco;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Promotora</b></div>
                      <div class = "col-md-9"><?=$promotora;?></div>
                    </div>
                  </li>
                  <li class = "list-group-item">
                    <div class = "row">
                      <div class = "col-md-3"><b>Orgão</b></div>
                      <div class = "col-md-9"><?=$orgao;?></div>
                    </div>
                  </li>
              </ul>
          </div>
          <div class="card-footer">
            <a href="checkout.php">Prosseguir para Checkout</a>
          </div>
      </div>
    </div>
  </div>
</div>
