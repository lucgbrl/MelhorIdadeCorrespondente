<?php
     error_reporting(E_ALL & ~E_NOTICE);
     session_start();
     include 'static/head.php';
     include 'static/nav.php';

     $_SESSION['nome_loja'];

     $nome_cli = $_POST['nome_cli'];
     $cpf_cli  = $_POST['cpf_cli'];
     $rg_cli = $_POST['rg_cli'];;
     $telefone_cli = $_POST['telefone_cli'];
     $uf_cli = $_POST['uf_cli'];
     $cidade_cli=  $_POST['cidade_cli'];;
     $add_cli = $_POST['add_cli'];;
     $add_num_cli = $_POST['add_num_cli'];

       include_once('dbconn.php');
       $sql = "INSERT INTO `clientes`(nome_cli, cpf_cli, rg_cli,telefone_cli,uf_cli,cidade_cli, add_cli, add_num_cli, id_fun) VALUES ('$nome_cli', '$cpf_cli', '$rg_cli', '$telefone_cli', '$uf_cli', '$cidade_cli', '$add_cli', '$add_num_cli', 1)";
       $result = mysqli_query($conn, $sql);

       $search = "SELECT nome_cli FROM clientes WHERE id_cli MAX(id_cli)";
       $cli = mysqli_query($conn, $search);
?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-3">
            <div class = "card">
                <div class = "card-body">
                    <h3>Loja</h3>
                    <hr>
                    Você está na Loja <?=$_SESSION['nome_loja'];?>
                </div>
              </div>
            <div class="card">
              <div class="card-header">
                Dados do Cliente
              </div>
              <div class="card-body">
                <ul class = "list-group">
                  <small>
                    <?php
                      while($row = mysqli_fetch_array($cli)){
                      ?>
                      <li class = "list-group-item"><?=$row['nome_cli'];?></li>
                      <li class = "list-group-item"><?=$row['cpf_cli'];?></li>
                      <li class = "list-group-item"><?=$row['telefone_cli'];?></li>
                      <li class = "list-group-item"><?=$row['add_cli'];?></li>
                    <?php
                      }
                    ?>
                </small>
                </ul>
              </div>
            </div>
        </div>

        <div class = "col-md-6">
            <div class = "card">
                <div class =  "card-header bg-white">Produto</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-atlas"></i> Informações do Produto</h3>
                    <hr>
                    <b>Versão 1.0.2</b>
                    <br><br>
                    <p>Selecione entre as opções abaixo</p>
                    <form action = "cad_contrato.php" method = "post">
                        <!-- Modelo -->
                        <select class="custom-select custom-select-lg mb-3" name = "produto">
                            <option selected>Produto</option>
                            <?php
                                 include_once('dbconn.php');

                                 $sql = "SELECT * FROM produtos";
                                 $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                              $nome_prod = $row['nome_prod'];
                            ?>
                            <option value="<?=$nome_prod;?>"><?=utf8_encode($nome_prod);?></option>
                            <?php } ?>
                        </select>
                        <!-- Numérico -->
                        <div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Valor (R$)</label>
                            <input type="text" class = "form-control" name = "valor">
                            <!--div class = "input-group-append">
                                <span class = "input-group-text bg-white">00</span>
                            </div-->
                        </div>
                        <!-- End of Modelo -->
                        <select class="custom-select custom-select-lg mb-3" name = "parcelas">
                            <option selected>Quantidade de Parcelas</option>
                            <?php
                                 include_once('dbconn.php');

                                 $sql = "SELECT * FROM parcelas";
                                 $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                              $num_parcelas = $row['num_parcelas'];
                            ?>
                            <option value="<?=$num_parcelas;?>"><?=$num_parcelas;?></option>
                          <?php } ?>
                        </select>
                        <!-- Numérico -->
                        <!--div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Observações</label>
                            <input type="text" class = "form-control" name = "obs_prod">
                        </div-->
                        <!--button href="" type = "submit" class = "btn btn-link">Avançar</button>
                    </form-->
                </div>
            </div>

            <div class = "card">
                <div class =  "card-header bg-white">Esteira</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-address-book"></i> Detalhes do Produto</h3>
                    <hr>
                    <b>Versão 1.0.11</b>
                    <br><br>
                    <p>Preencha os dados abaixo</p>
                    <!--form action = "revisao.php" method = "post">
                        <!-- Modelo -->
                        <select class="custom-select custom-select-lg mb-3" name = "banco">
                            <option selected>Banco</option>
                            <?php
                                 include_once('dbconn.php');

                                 $sql = "SELECT * FROM bancos";
                                 $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                              $nome_banco = $row['nome_banco'];
                            ?>
                            <option value="<?=$nome_banco;?>"><?=$nome_banco;?></option>
                            <?php } ?>
                        </select>
                        <!-- End of Modelo -->
                        <select class="custom-select custom-select-lg mb-3" name = "promotora">
                            <option selected>Promotora</option>
                            <?php
                                 include_once('dbconn.php');

                                 $sql = "SELECT * FROM promotoras";
                                 $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                              $nome_promotora = $row['nome_promotora'];
                            ?>
                            <option value="<?=$nome_promotora;?>"><?=$nome_promotora;?></option>
                            <?php } ?>
                        </select>
                        <!-- Numérico -->
                        <!-- End of Modelo -->
                        <select class="custom-select custom-select-lg mb-3" name = "orgao">
                            <option selected>Orgão</option>
                            <?php
                                 include_once('dbconn.php');

                                 $sql = "SELECT * FROM orgaos";
                                 $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                              $nome_orgao = $row['nome_orgao'];
                            ?>
                            <option value="<?=$nome_orgao;?>"><?=$nome_orgao;?></option>
                            <?php } ?>
                        </select>
                        <!-- Numérico -->
                        <div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Digitador</label>
                            <input type="text" class = "form-control" name = "digitador">
                        </div>
                        <button type = "submit" class = "btn btn-success"> Avançar</button>
                    </form>
                </div>
            </div>
        </div>

        <!--div class = "col-md-3">
            <div class = "card">
                <div class = "card-header">Hello</div>
                <div class = "card-body">
                        <ul class = "list-group list-group-flush">
                            <li class = "list-group-item"><i class = "fa fa-book"></i> Admin/Início</li>
                            <li class = "list-group-item"><i class = "fa fa-book"></i> Admin/Notas</li>
                            <li class = "list-group-item"><i class = "fa fa-book"></i> Admin/Guias</li>
                        </ul>
                    <a href="" class = "btn btn-link">Ver atividade</a>
                </div>
            </div>
        </div-->
        <div class = "col-md-3">
            <div class = "card">
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
    </div>
</div>
