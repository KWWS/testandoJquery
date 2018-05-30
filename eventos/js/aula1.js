 $(function(){
	
	$('img').error(function(){
		var imagem = $(this).attr("src");
		alert('A imagem  '+imagem+'  nao existe');
		$(this).attr("src", "img/erro.gif");
		//$('img').attr("src", "img/erro.gif");
		
	});	
	
	$('body').css({$(overflow:'hidden', margin:'0')});
	$('img').width($(window.width()));
 });	