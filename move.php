<?php 
    include 'head.php';
    include 'nav.php';
?>
<div class = "container">
	<div class = "row">
		<div class = "col-md-4">
			<div class = "card">
				<div class = "card-header">Funcionário</div>
				<div class = "card-body">
                    <form action="" method="get" idProfessor='form-contato' class="form-horizontal">
                        <div class = "input-group mb-3">
                            <input type="text" class="form-control" idProfessor="termo" name="termo" placeholder="Infome o Nome ou E-mail">
                            <div class = "input-group-append">
                                <button type="submit" class = "btn-primary input-group-text"><i class = "fa fa-search"></i></span></button>
                            </div>
                        </div>
                        <a href='cadastro_artista.php' class="btn btn-link">Ver Todos</a>
                    </form>


                    </form>
                        <br>
                        <ul class = "list-group">
                            <li class = "list-group-item"><i class = "fa fa-book"></i> item</li>
                            <li class = "list-group-item"><i class = "fa fa-book"></i> item</li>
                            <li class = "list-group-item"><i class = "fa fa-book"></i> item</li>
                        </ul>
                    </form>
                </div>
				<div class = "card-footer">
                    <a href="#">Precisa de ajuda?</a>
                </div>
			</div>

            <div class = "card">
                <div class = "card-header">Parceiros</div>
                <div class = "card-body">Você não tem nenhum parceiro ainda!</div>
            </div>
		</div>
        <!-- MD-8 -->
        <div class = "col-md-8">
            <div class = "card">
            <div class = "card-header"><i class = "fa fa-address-card text-secondary"></i> Cadastro do Funcionário</div>
				<div class = "card-body"><?=include 'cadastro.php';?></div>
			</div>
        </div>
	</div>
</div>