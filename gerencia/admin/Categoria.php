        <?php include "verificarSession.php" ?>	
		<?php include "header.php" ?>
        
        <section class="cardArea">
            <h4 class="white">Cadastrar Categoria</h4>
            <form action="insertCategoria.php" method="POST">
            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text" name="nome" placeholder="Nome da categoria">
                </div>
            </div>    
            <button type="submit" class="uk-button uk-button-danger" name="Cadastrar">Cadastrar</button>        
            </form>
        </section>

	</div>
    <link rel="stylesheet" href="../css/Categoria.css">
</body>

</html>