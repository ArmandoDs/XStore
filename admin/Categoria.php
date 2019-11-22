        <?php include "verificarSession.php" ?>	
		<?php include "header.php" ?>
        
        <section class="section-content">
            <h4>Cadastrar Categoria</h4>
            <form action="insertCategoria.php" method="POST">
                <input type="text" name="nome" placeholder="Nome">
                <input type="submit" value="Cadastrar">
            </form>
        </section>

	</div>
    <link rel="stylesheet" href="../css/Categoria.css">
</body>

</html>