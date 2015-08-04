$('a[href^="#"]').click(function(){
	var id_ancre = $(this).attr("href");

	$('html, body').animate({
		scrollTop:$(id_ancre).offset().top
	}, 2000);

	return false;

});


$('#validate_game').click(function(e){
	e.preventDefault();

	$.ajax({
		success: function(response){
			$('#box_green').show();
		}
	});
});