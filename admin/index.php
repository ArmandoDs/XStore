		<?php include "verificarSession.php" ?>	
		<?php include "header.php" ?>
		<a class="oi">mostrar</a>


		<div class="owl-carousel owl-theme owl-loaded owl-position">	
			<?php include "../dal/selectTopJogo.php";?>
		</div>

		<div class="grid">
			<?php include"../dal/selectAll.php"; ?>	
		</div>

		<script src="../script/jquery.min.js"></script>
		<script src="../owlcarousel/owl.carousel.min.js"></script>
		<script src="../script/carousel.js"></script>
	</div>
</body>

</html>