<?php
  error_reporting(E_ALL & ~E_NOTICE);
     session_start();
     include 'static/head.php';
     include 'static/nav.php';

          $_SESSION['nome_loja'];

          $_SESSION['_nome'];
          $_SESSION['_cpf'];
          $_SESSION['rg_cli'];
          $_SESSION['_add'];
          $_SESSION['_telefone'];
          $_SESSION['_obs'];

          $_prod = $_POST['produto'];
          $_valor = $_POST['valor'];

          $_banco = $_POST['banco'];
          $_promotora = $_POST['promotora'];
          $_orgao = $_POST['orgao'];
          $_parcelas = $_POST['parcelas'];
          $_digitador = $_POST['digitador'];
          $_obs_prod = $_POST['obs_prod'];

          $_SESSION['_valor'] = $_POST['valor'];

          include_once('dbconn.php');

          $sql = "INSERT INTO  clientes (nome_cli, cpf_cli, rg_cli, telefone_cli, uf_cli, cidade_cli, add_cli, add_num_cli, id_fun) VALUES ('joao','123','2009','99','CE','sobral','centro','22','1')";
          mysqli_query($conn, $sql);
?>

<div class = "container align-center">
    <div class = "row">
        <!--div class = "col-md-3">
            <div class = "card">
                <div class = "card-body">
                    <h3>Loja</h3>
                    <hr>
                    Você está na Loja <?=$_SESSION['nome_loja'];?>
            </div>
        </div>
      </div-->


        <div class = "col-md-6">
            <div class  = "card">
                <div class = "card-header">Leia-me</div>
                <div class = "card-body">
                    <h3><i class  = "fa fa-atom"></i> Revisão dos dados do Cliente</h3>
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
                        <p class="mb-1"><?=$_SESSION['_obs'];?></p>
                        <small>Na esteira.</small>
                    </a>
                        <li class = "list-group-item">
                          <div class = "row">
                            <div class = "col-md-3"><b>Nome</b></div>
                            <div class = "col-md-9"><?=$_SESSION['_nome'];?></div>
                          </div>
                        </li>
                        <li class = "list-group-item">
                          <div class = "row">
                            <div class = "col-md-3"><b>CPF</b></div>
                            <div class = "col-md-9"><?=$_SESSION['_cpf'];?></div>
                          </div>
                        </li>
                        <li class = "list-group-item">
                          <div class = "row">
                            <div class = "col-md-3"><b>RG</b></div>
                            <div class = "col-md-9"><?=$_SESSION['rg_cli'];?></div>
                          </div>
                        </li>
                        <li class = "list-group-item">
                          <div class = "row">
                            <div class = "col-md-3"><b>Endereço</b></div>
                            <div class = "col-md-9"><?=$_SESSION['_add'];?></div>
                          </div>
                        </li>
                        <li class = "list-group-item">
                          <div class = "row">
                            <div class = "col-md-3"><b>Telefone</b></div>
                            <div class = "col-md-9"><?=$_SESSION['_telefone'];?></div>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class = "col-md-6">
            <!--div class = "card">
                <div class =  "card-header">Ajuda</div>
                    <div class = "card-body">
                        <form action = "" method = "post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ajuda" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon1"><i class = "fa fa-search text-primary"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class = "text-secondary">Busque por termos: Ex.: Borderô</p>
                        <ul class = "list-group">
                            <li class = "list-group-item">Contratos</li>
                            <li class = "list-group-item">Pesquisas</li>
                            <li class = "list-group-item">Guias</li>
                        </ul>
                </div>
            </div>
        </div>
    <!-- End section-->
    <div class  = "card">
        <div class = "card-header">Leia-me</div>
        <div class = "card-body">
            <h3><i class  = "fa fa-file-contract"></i> Revisão dos dados do Produto</h3>
            <hr>
            <b>Versão 1.0.0.b</b>
            <br><br>
            <p>Titulo</p>
            <ul class = "list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Produto: <?=$_POST['produto'];?></h5>
                <small>Admin</small>
                </div>
                <p class="mb-1"><?=$_obs_prod;?></p>
                <small>Na esteira.</small>
            </a>
                <li class = "list-group-item">
                  <div class = "row">
                    <div class = "col-md-3"><b>Valor</b></div>
                    <div class = "col-md-9">R$<?=$_valor;?></div>
                  </div>
                </li>
                <li class = "list-group-item">
                  <div class = "row">
                    <div class = "col-md-3"><b>Parcelas</b></div>
                    <div class = "col-md-9"><?=$_parcelas;?></div>
                  </div>
                </li>
                <li class = "list-group-item">
                  <div class = "row">
                    <div class = "col-md-3"><b>Valor das Parcelas</b></div>
                    <div class = "col-md-9">R$<?=$_valor/ 24;?>, 00</div>
                  </div>
                </li>
                <li class = "list-group-item">
                  <div class = "row">
                    <div class = "col-md-3"><b>Banco</b></div>
                    <div class = "col-md-9"><?=$_banco;?></div>
                  </div>
                </li>
                <li class = "list-group-item">
                  <div class = "row">
                    <div class = "col-md-3"><b>Orgão</b></div>
                    <div class = "col-md-9"><?=$_orgao;?></div>
                  </div>
                </li>
                <li class = "list-group-item">
                  <div class = "row">
                    <div class = "col-md-3"><b>Promotora</b></div>
                    <div class = "col-md-9"><?=$_promotora;?></div>
                  </div>
                </li>
            </ul>
            <br>
            <a class = "btn btn-primary mb-3" href="lista_con.php">Finalizar Cadastro</a>
            <a class = "btn btn-primary mb-3" href="#">Editar</a>
            <a class = "btn btn-primary mb-3" href="#">Cancelar</a>
        </div>
    </div>

    </div>
</div>
