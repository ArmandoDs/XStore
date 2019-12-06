$(document).ready(function(){
  $("#panel").slideUp();
  $(".sumir").hide();    
  $(".menuLink").hide();    
  $(".iconMenuHide").show();      
  $(".menuIcon").show();
  $(".itemMenu").css("padding-left","0");
  $(".itemMenu").css("justify-content","center");
  $(".menu").css("transform","rotateX(0deg)");
  $(".menu").css("width","4vw");
  $(".menu").css("width","4vw");
  $(".cardArea").css("margin-left","6vw");
  
  

  //script da janela de ediçaõ//
  $("#editArea").hide(); 
  $("#id-1").hide();   
  $("#id-2").val($("#id-1").text());
  $("#titulo-2").val($("#titulo-1").text());
  $("#descricao-2").val($("#descricao-1").text());
  $("#preco-2").val($("#preco-1").text());
  $("#btn-editar").click(function(){
    $("#editArea").slideToggle("slow");
    $("#DescricaoHide").slideToggle("slow");
  }); 


  //fim do script da janela de ediçaõ//
    $("#menuIcon").click(function(){
      $(".sumir").hide();    
      $(".menuLink").hide();    
      $(".iconMenuHide").show();      
      $(".menuIcon").show();
      $(".itemMenu").css("padding-left","0");
      $(".itemMenu").css("justify-content","center");
      $(".menu").css("transform","rotateX(0deg)");
      $(".menu").css("width","4vw");
      $(".cardArea").css("margin-left","6vw"); 
    }); 
    $(".iconMenuHide").click(function(){
      $(".sumir").show();    
      $(".menuLink").show();      
      $(".iconMenuHide").hide();      
      $(".itemMenu").css("padding-left","10px");
      $(".itemMenu").css("justify-content","unset");
      $(".menu").css("transform","rotateX(0deg)");
      $(".menu").css("width","10vw");
      $("#center").css("justify-content","center");
      $("#center").css("padding-left","0px");
      $(".cardArea").css("margin-left","15vw");  
    });    
    $("#show").click(function(){
      $("p").show();
    });
    $("#flip").click(function(){
      $("#panel").slideToggle("slow");
    });  
  });
