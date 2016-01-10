$(document).ready(function() {

	$('[data-toggle="offcanvas"]').click(function () {
		$('.row-offcanvas').toggleClass('active');
	});

	$('.form-delete').submit(function(e) {
		e.preventDefault();
		
		var $form = $(this),
			url  = $form.attr('action'),
			data = $form.serialize();

		swal(
			{   
				title: "¿Estas seguro?",
				text: "No serás capaz de recuperar este elemento",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Si, eliminar esto!",   
				cancelButtonText: "No, cancelar!",   
				closeOnConfirm: false,   
				closeOnCancel: false 
			}, 
			function(isConfirm){   
				if (isConfirm) {     
					$.post(url, data, function(response) {
						location.reload();
					});
				} else {     
					swal("Cancelado", "Tu elemento esta seguro :)", "error");   
				} 
			}
		);
	});

});