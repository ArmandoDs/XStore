<?php include "verificarSession.php" ?>	
<?php include "header.php" ?>
<a class="oi">mostrar</a>




<h3>Destaque em venda</h3>
	<div class="owl-carousel owl-theme owl-loaded">	
	<?php include "../dal/selectTopJogo.php";?>
	</div>


	<div class="grid">
		<?php include"../dal/selectAll.php"; ?>	
	</div>

	<script src="jquery.min.js"></script>
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="carousel.js"></script>
</div>
</body>

</html>