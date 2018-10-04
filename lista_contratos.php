<?php
    error_reporting(E_ALL & ~E_NOTICE);
     session_start();
     include 'static/head.php';
     include 'static/nav.php';
     $_SESSION['_cpf'];
     $_SESSION['_nome'];
     $_SESSION['_valor'];

          /*$_nome = $_POST['nome_cli'];
          $_cpf = $_POST['cpf_cli'];
          $_rg = $_POST['rg_cli'];
          $_add = $_POST['add_cli'];
          $_telefone = $_POST['telefone_cli'];
          $_obs = $_POST['obs_cli'];

          $_prod = $_POST['produto'];
          $_valor = $_POST['valor'];

          $_banco = $_POST['banco'];
          $_promotora = $_POST['promotora'];
          $_orgao = $_POST['orgao'];
          $_parcelas = $_POST['parcelas'];
          $_digitador = $_POST['digitador'];
          $_obs_prod = $_POST['obs_prod'];*/




?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-12">
            <div class  = "card">
                <div class = "card-header">Leia-me</div>
                <div class = "card-body">
                    <h3><i class  = "fa fa-atom"></i> Contratos</h3>
                    <hr>
                    <b>Versão 1.0.0.a</b>
                    <br><br>
                    <p>Titulo</p>

                    <div class="col-md-12">
                      <table class = "table table-stripped table-bordered table-responsive">
                        <thead class = "thead">
                          <tr>
                            <th>Id</th>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Parcelas</th>
                            <th>Promotora</th>
                            <th>Banco</th>
                            <th>Orgão</th>
                            <th>Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>01</td>
                            <td><?=$_SESSION['_cpf'];?></td>
                            <td><?=$_SESSION['_nome'];?></td>
                            <td><?=$_SESSION['_cpf'];?></td>
                            <td><?=$_SESSION['_valor'];?></td>
                            <td><?=$_SESSION['_valor'];?></td>
                            <td><?=$_SESSION['_valor'];?></td>
                            <td><?=$_SESSION['_valor'];?></td>
                            <td><?=$_SESSION['_valor'];?></td>
                            <td><a class = "btn btn-link" href = "#">Editar</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- End section-->
    </div>
</div>
