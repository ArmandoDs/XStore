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
 
    <?php include"../dal/selectAll.php"; ?>	
</div>

<!-- end of class corpo-->
</div>
</body>

</html>