    <?php include "verificarSession.php" ?>	
    <?php include "header.php" ?>
    <!--alerta-->
    <?php if(!empty($msgErro1)){ ?>  
      <div class="uk-alert-danger alertaFix" id="Alerta" uk-alert>
      <a class="uk-alert-close" uk-close></a>
        <p><?php echo "$msgErro1";?></p>
      </div>
    <?php } ?>
    <!--end of alerta--> 
    <!--sucesso-->
    <?php if(!empty($msg)){ ?>  
      <div class="uk-alert-success alertaFix" id="Alerta" uk-alert>
      <a class="uk-alert-close" uk-close></a>
        <p><?php echo "$msg";?></p>
      </div>
    <?php } ?>
    <!--end of sucesso-->     

    <div class="owl-carousel owl-theme owl-loaded owl-position">	
      <?php include "../dal/selectTopJogo.php";?>
    </div>

    <div class="grid">
        <?php include"../dal/selectAll.php"; ?>	
    </div>

  <!-- end of class corpo-->
  </div>

  <script src="../script/jquery.min.js"></script>
  <script src="../owlcarousel/owl.carousel.min.js"></script>
  <script src="../script/carousel.js"></script>
</body>

</html>