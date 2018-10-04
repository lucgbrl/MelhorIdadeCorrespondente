<?php
     error_reporting(E_ALL & ~E_NOTICE);
     session_start();
     include 'head.php';
     include 'nav.php';



     /*if($_POST['submit_c']){
       include_once('dbconn.php');
       $sql = "INSERT INTO lojas (nome_loja, add_loja, add_num_loja, telefone_loja, bairro_loja ) VALUES('$nome_loja','$add_loja','$add_num_loja', '$telefone_loja' ,'$bairro_loja')";
       mysqli_query($conn, $sql);
     }*/
?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-3">
            <div class = "card">
                <div class = "card-body">
                    <h3>Admin</h3>
                    <hr>
                      Você está em <?=$_POST['loja'];?>
                </div>
            </div>
        </div>

        <div class = "col-md-6">
          <div class = "card">
              <div class = "card-body">
                  <h3>Loja</h3>
                  <hr>
                  <?php
                       include_once('dbconn.php');

                       $sql = "SELECT * FROM lojas";
                       $result = mysqli_query($conn, $sql);
                  ?>
                  <p>Selecione uma loja</p>

                  <form class="" action="home.php" method="post">
                    <select class="form-control mb-3" name="loja" required>
                      <option value="1">Selecione uma Loja</option>

                      <?php

                        while($row = mysqli_fetch_array($result)){
                          $nome_loja = $row['nome_loja'];
                      ?>
                        <option value="<?=$nome_loja;?>"><?=$nome_loja;?></option>
                      <?php }?>
                    </select>
                    <input type="submit" name="submit_s" value="Selecionar" class = "btn btn-primary btn-block">
                  </form>
              </div>
          </div>
            <div class = "card">
                <div class =  "card-header bg-white">Pré-Cadastro</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-address-card"></i> Cadastrar Funcionário</h3>
                    <hr>
                    <b>Versão 1.1</b>
                    <br><br>
                    <p>Preencha os campos abaixo para cadastrar um novo funcionário à loja</p>
                    <form action = "produto.php" method = "post">
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
                        <button href="produto.php" type = "submit" class = "btn btn-success" name = "submit">Avançar</button>
                    </form>
                </div>
            </div>

            <!--div class = "card">
                <div class =  "card-header bg-white">Produto</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-atlas"></i> Informações do Produto</h3>
                    <hr>
                    <b>Versão 1.0.2</b>
                    <br><br>
                    <p>Selecione entre as opções abaixo</p>
                    <form action = "" method = "post">
                        <!-- Modelo
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Produto</option>
                            <option value="1">Refin</option>
                            <option value="2">Novo</option>
                            <option value="3">Empréstimo da Conta de Luz</option>
                            <option value="3">Contrato de crédito</option>
                        </select>
                        <!-- Numérico
                        <div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Valor (R$)</label>
                            <input type="text" class = "form-control">
                            <div class = "input-group-append">
                                <span class = "input-group-text bg-white">,00</span>
                            </div>
                        </div>
                        <!-- End of Modelo
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Quantidade de Parcelas</option>
                            <option value="1">12</option>
                            <option value="2">18</option>
                            <option value="3">24</option>
                            <option value="3">36</option>
                        </select>
                        <!-- Numérico
                        <div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Parcelas</label>
                            <input type="text" class = "form-control">
                        </div>
                        <button href="" type = "submit" class = "btn btn-link">Avançar</button>
                    </form>
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
                    <form action = "" method = "post">
                        <!-- Modelo
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Banco</option>
                            <option value="1">BMG</option>
                            <option value="2">BB</option>
                            <option value="3">Caixa</option>
                        </select>
                        <!-- End of Modelo
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Promotora</option>
                            <option value="1">Pan</option>
                            <option value="2">Bevicred</option>
                        </select>
                        <!-- Numérico
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Quantidade de Parcelas</option>
                            <option value="1">12</option>
                            <option value="2">18</option>
                            <option value="3">24</option>
                            <option value="3">36</option>
                        </select>
                        <!-- Numérico
                        <!-- Numérico
                        <div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Digitador</label>
                            <input type="text" class = "form-control">
                        </div>
                        <button href="" type = "submit" class = "btn btn-link">Avançar</button>
                    </form>
                </div>
            </div>

            <div class = "card">
                <div class =  "card-header bg-white">Esteira</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-folder-open"></i> Revisão</h3>
                    <hr>
                    <b>Versão 1.0.11</b>
                    <br><br>
                    <p>Revise os dados do contrato</p>
                    <form action = "" method = "post">
                        <!-- Modelo
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Status do Produto</option>
                            <option value="1">Aprovado</option>
                            <option value="2">Aprovado/Pago</option>
                            <option value="3">Reprovado</option>
                        </select>
                        <!-- Numérico
                        <div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Digitador</label>
                            <input type="text" class = "form-control">
                        </div>
                        <!-- End of Modelo
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Quantidade de Parcelas</option>
                            <option value="1">12</option>
                            <option value="2">18</option>
                            <option value="3">24</option>
                            <option value="3">36</option>
                        </select>
                        <!-- Numérico
                        <button href="" type = "submit" class = "btn btn-link">Avançar</button>
                    </form>
                </div>
                <!--div class ="card-footer">
                    <div class = "row">
                        <div class = "col-md-6">
                            <a href=""><i class = "fa fa-folder"></i>  Ver item</a>
                        </div>
                        <div class = "col-md-6">
                        <a href=""><i class = "fa fa-search"></i> Ir para arquivo</a>
                        </div>
                    </div>
                </div>
            </div-->
        </div>

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
