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
    <div class="cardArea">
    <div class="myTitle"><h1 class="uk-heading-small white"uk-tooltip="title:Top 5 jogos mais vendidos; pos: bottom">Destaques de vendas</h1></div>
      <div uk-slider="center: true" style="overflow:hidden;">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
          <ul class="uk-slider-items uk-grid" >
            <?php include "../dal/selectTopJogo.php";?>
          </ul>
          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>      
      </div>  
    </div>
    <div class="cardArea">
    <div class="myTitle"><h1 class="uk-heading-small white"uk-tooltip="title:Top 5 jogos mais vendidos; pos: bottom">Jogos</h1></div>
      <div class="uk-child-width-1-2@m" uk-grid>
       <?php include "../dal/selectAll.php";?>
      </div>
    </div>  
    <!-- end of class corpo-->
  </div>

  <script src="../script/jquery.min.js"></script>
  <script src="../owlcarousel/owl.carousel.min.js"></script>
  <script src="../script/carousel.js"></script>
</body>

</html>