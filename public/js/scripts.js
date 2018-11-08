
//#region validações do modal
$('#salvar').click(function(){
   if($('#email').val() === '' || $('#email').val() === undefined){
 
       swal("Falha!!", "Campo Obrigatório Pendente!", "error");
       $('#email').addClass("erro");
   }
   
});


$('#cancelar').click(function(){
   $('#email').removeClass("erro");
});


$('#fechar').click(function(){
$('#email').removeClass("erro");
})








$('#salvar2').click(function(){
   if($('#email2').val() === '' || $('#email2').val() === undefined){
 
       swal("Falha!!", "Campo Obrigatório Pendente!", "error");
       $('#email2').addClass("erro");
   }
   
});


$('#cancelar2').click(function(){
   $('#email2').removeClass("erro");
});


$('#fechar2').click(function(){
$('#email2').removeClass("erro");
})




//#endregion


//#region animate
(function(){
  var $target = $('#valores'),
  animationClass = 'animated fadeInLeft',
  offset = $(window).height() * 2/3;

  function animeScrool(){
  var documentTop = $(document).scrollTop(); 
  
  $target.each(function() {
    var itemTop = $(this).offset().top;
    if(documentTop > itemTop - offset){
      $(this).addClass(animationClass)
    }else{
      $(this).removeClass(animationClass);
    }
  })
}
  
  animeScrool();

  $(document).scroll(function(){
    animeScrool();
  })
}());
//#endregion