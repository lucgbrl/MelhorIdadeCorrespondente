<?php

  include 'static/head.php';
  include 'static/nav.php';

?>

<div class="container">
  <div class="row">
    <div class = "col-md-6">
      <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <h3>Entrar no sistema</h3>
            <hr>
            <form class="form-control" action="index.html" method="post">
              <div class = "input-group mb-3">
                  <label for="nome_cli" class = "form-control col-md-3">Usuario</label>
                  <input type="text" class = "form-control" name = "nome_usuario">
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
