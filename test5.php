 <!DOCTYPE>
<html>
<head>
<title>Atributos</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript ">
 $(function(){
	$('a[rel]').css({
	display:'block',
	'margin-bottom': '10px'
	 });
	$('a[href="#"]').css('font-size', '30px'); 
	$('a[href*="up"]').css('font-size', '50px'); 
	$('a[rel!="up1"]').css('color', '#606'); 
	$('a[title*="upside"]').click(function(){
		alert ('Estamos estudando os seletores de atributos'); 
	 });	
 	
 });	 
</script>
</head>
<body>
 	<a href="#" rel="up1"> Link 1  </a>
	<a href="#" rel="up2"> Link 2  </a>
	<a href="#up" rel="up3" title="upside"> Link 3  </a>

</body>
</html>