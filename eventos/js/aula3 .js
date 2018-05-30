 $(function(){
	$('j_place').each(function(){
		var place = $(this).attr('title');
		var input = $(this);
		input
			.val(place) 
			.css('color', '#ccc');
			.focusin(function(){
				input.css('color','#000');
				if(input.val()==place){
					input.val('');
				}
			});
	});
 });	