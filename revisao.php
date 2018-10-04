<?php
     include 'head.php';
     include 'nav.php';
?>

<div class = "container align-center">
    <div class = "row">
        <div class = "col-md-3">
            <!--div class = "card">
                <div class =  "card-header">Consulta</div>
                <div class = "card-body">
                    <form action = "" method = "post">                         
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisa" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="input-group-text" id="basic-addon1"><i class = "fa fa-search text-primary"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div-->
            <div class = "card">
                <div class = "card-body">
                    <h3>Admin</h3>
                    <hr>
                    Olá, @, Seja bem vindo!
            </div>
        </div>
        </div>

        <div class = "col-md-6">
            <div class = "card">
                <div class =  "card-header bg-white">Esteira</div>
                <div class = "card-body">
                    <h3><i class = "fa fa-folder-open"></i> Revisão</h3>
                    <hr>
                    <b>Versão 1.0.11</b>
                    <br><br>
                    <p>Revise os dados do contrato</p>
                    <form action = "" method = "post">                         
                        <!-- Modelo -->
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Status do Produto</option>
                            <option value="1">Aprovado</option>
                            <option value="2">Aprovado/Pago</option>
                            <option value="3">Reprovado</option>
                        </select>
                        <!-- Numérico -->
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Quantidade de Parcelas</option>
                            <option value="1">12</option>
                            <option value="2">18</option>
                            <option value="3">24</option>
                            <option value="3">36</option>
                        </select>
                        <!-- Numérico -->
                        <div class = "input-group mb-3">
                            <label for="" class = "form-control col-md-3">Observação</label>
                            <input type="text" class = "form-control">
                        </div>
                        <!-- End of Modelo -->
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
                </div-->
            </div>

            <div class  = "card">
                <div class = "card-header">Leia-me</div>
                <div class = "card-body">
                    <h3><i class  = "fa fa-atom"></i> Hello</h3>
                    <hr>
                    <b>Versão 1.0.0.a</b>
                    <br><br>
                    <p>Titulo</p>
                    <ul class = "list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Contrato de Refin</h5>
                        <small>Admin</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Status - Ativo.</small>
                    </a>
                        <li class = "list-group-item">Nome</li>
                        <li class = "list-group-item">CPF</li>
                        <li class = "list-group-item">RG</li>
                        <li class = "list-group-item">Produto</li>
                        <li class = "list-group-item">Parcelas</li>
                        <li class = "list-group-item">Detalhes</li>
                    </ul>
                </div>
            </div>
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