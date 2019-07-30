$(document).ready(function(){

	$('a#get').on('click', function(){
		$('form#ajax_off').submit();
	});

	$('a#ajax').on('click', function(){
		$.ajax({
			url:window.location.href,
			dataType:'text',
			method:'POST',
			data:$('form#ajax_mode').serialize(),
			success:function(html){
				matches = html.match(/<ajax_result.*?>(.*?)<\/ajax_result>/);
				$('form p').html('<p>'+ matches[1]  +'</p>');	
			}
		})
	});

});