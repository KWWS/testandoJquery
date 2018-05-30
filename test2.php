 <!DOCTYPE>
<html>
<head>
<title>Lógica Jquery!</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript ">
 $(function(){
	 /*$('h1').css("color", "#069"); sem ser encadeado
	 $('h1').hide();
	 $('h1').delay('1000');
	 $('h1').fadeIn("slow");
	 $('h1').text('KP Tecnologia');
	 */
	//$('h1').css("color", "#606").hide().delay('1000').fadeIn("slow").text("KP tecnologia Encadeado"); 
	
	/*Em bloco
	$('h1')
	.css("color", "#F60")
	.hide()
	.delay('1000')
	.fadeIn("slow")
	.text("KP tecnologia bloco"); 
	
	*/
	
	/* 
	$('h1')
	.css("color", "#F66")
	.hide()
	.delay('1000')
	.fadeIn("slow")
	.text("KP tecnologia bloco") 
	.click(function(){
		$('body').css("background", "#c30");
		$('h1').css("color", "#fff");
	});
	*/
	
	//$('a').css("color", "red");
	
	$('a').css({
		color: 'red',
		display: 'block'
	 });	
	$('.2').css("color", "#000");	
	$('#3').css("color", "green");
	//$('*').css("margin", "0");
	$('*').css("padding", "10px");
	$('h1,#3').css("border-bottom", "solid 3px red");
	  
 });	 
</script>
</head>
<body>
<h1> Lógica do funcionamento Jquery </h1>
<a href="#"> Link 1 </a>
<a href="#" class="2"> Link 2 </a>
<a href="#" id="3"> Link 3 </a>

</body>
</html>