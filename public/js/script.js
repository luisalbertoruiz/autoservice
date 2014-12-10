$(document).ready(function() {
    setTimeout(function() {
        $("#notice").fadeOut(750);
    },2500);

    $('#buscarajax').keyup(function(event) {
 		var valor = $(this).val();
 		var urls = $(this).attr('name');
 		if (valor == ""){
 		}
 		else{
	    	$.ajax({
	    		url: urls+"/"+valor
	    	})
	    	.done(function(res) {
	    		$('.table-responsive').html(res);
	    	})
	    	.fail(function() {
	    		$('.table-responsive').html('no se encontraron resultados');
	    	});
 		}	
    });
});