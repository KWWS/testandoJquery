 <!DOCTYPE>
<html>
<head>
<title>Seletores Hierarquicos!</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript ">
 $(function(){
	$('h2').css('margin', '0');	
	$('p').css({ margin:'0', color:'blue'});	
	$('.exemplo').css({
		'margin-bottom':'20px',
		background:'#ccc' 
	})
	$('.exemplo span').hide().delay('1000').fadeIn( 1000 ).css('color','red');  
	$('.exemplo h2').hide().css('font-size','50px').fadeIn(800);  
	$('.exemplo>span').css('color','green');
	$('.irmao_1 + p').css('font-size','25px');
	//$('.irmao_1 colocar o tio aqui- p').css('font-size','25px');
 });	 
</script>
</head>
<body>
 <div class="exemplo">
	<h2>H2 dentro do exemplo</h2>
	<p>P dentro de exemplo<span>Span dentro de P</span></p>
	<span>Span dentro de exemplo</span>	
 </div>
 
 <h2>H2 fora do exemplo</h2>
 <p class="irmao_1" >P1 fora de exemplo</p>
  <p class="irmao_2" >P2 fora de exemplo</p>
    <p class="irmao_3" >P3 fora de exemplo</p>
 
 

</body>
</html>