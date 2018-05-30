 <!DOCTYPE>
<html>
<head>
<title>form</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript ">
 $(function(){
	$('form')
		 .hide() 
		.css({
				padding: '10px',
				background: '#fbfbfb',	
				width: '500px',
				height: '500px',
				position: 'fixed',
				left: '50%',
				top: '50%',
				'margin-left': '-250px',
				'margin-top': '-250px'
		})
		.fadeIn(2000);
		$('label').css({
			display: 'block', 
			'margin-bottom': '10px'
		});
		$('.tt').css({
			display: 'block', 
			'margin-bottom': '3px',
			'font-family': '"Comic Sans MS", cursive' 
		});
		$('form: text, form:password').css({
			display: 'block', 
			'margin-bottom': '10px',
			padding: '5px', 
			background: 'blue'
			border: '0',
			width: '490px',
			color: '#fff'
		});
 });	 
</script>
</head>
<body>
		<form name="teste" action="" method="post">
			<label>
					<span class="tt"> Campo de Texto: </span> 
					<input type="text" name="texto" disabled="disabled"/>
			</label>
			<label>
					<span class="tt"> Campo de Password: </span> 
					<input type="password" name="texto" />
			</label>			
			<label for="checkbox">
					<input type="checkbox" checked="checked" value="1" /> Check 1
					<input type="checkbox" value="2" /> Check 2
			</label>
			<label for="radio">
					<input type="radio" name="radio" checked="checked" value="1" /> Radio 1
					<input type="radio" name="radio"  value="2" /> Radio 2
			</label>
			<label >
					<input type="file" name="arquivo"  />  
			 
			</label>			
			<label >
					<input type="submit" value="enviar"  />  
					<input type="reset" value="limpar"  /> 
			</label>	
			<label >
					<select name="teste " class="select"   >  
					<option value="1"    >Select </option> 
					</select>
			</label>	
			<label >
					<input type="image" src="img/btn_enviar.jpg"/>
					 
			</label>	

</body>
</html>