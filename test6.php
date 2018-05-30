 <!DOCTYPE>
<html>
<head>
<title>Filtros</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript ">
 $(function(){
	 $('li:contains("Tecnologia")').css("background", "#609");
	 $('li:has("span")').css("background", "#F00");
	 $('li:empty').css("background", "#3F6");
	 $('li:not(li:empty').css("border", '3px solid pink' );
 });	 
</script>
</head>
<body>
 	 <ul>
		<li> UpInside Tecnologia </li>
		<li> Portal <span> de </span> Interatividade</li>
		<li> </li>
		<li> Cursos e <span>Video aulas</span> em TI </li>
		<li> </li>
		<li> Tudo que voce precisa em Tecnologia web</li>
	 </ul>

</body>
</html>