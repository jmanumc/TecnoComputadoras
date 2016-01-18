$(document).ready(function() {

	// BUTTON DELETE
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

	// SHOW USER MODAL
	$('#showUserModal').on({
		'show.bs.modal': function (event) {
			var button = $(event.relatedTarget)
			var recipient = button.data('whatever')
			
			var modal = $(this)
			$.get(recipient, function(response) {
				if(response.success) {
				    modal.find('.modal-title').text(response.user.name)
					modal.find('.modal-body .user-avatar').attr('alt', response.user.name).attr('src', response.user.avatar)
					modal.find('.modal-body .user-email').text(response.user.email)
					modal.find('.modal-body .user-type').text(response.user.type)
				}
			}, 'json').fail(function(response) {
				modal.find('.modal-title').text('Lo sentimos pero ha ocurrido un error')
				modal.find('.modal-body').text(':(').addClass('lead')
			})
		},
		'hidden.bs.modal': function (event) {
			var modal = $(this)
			modal.find('.modal-body').removeClass('lead')
			modal.find('.modal-title').text('Name')
			modal.find('.modal-body .user-avatar').attr('alt', 'Name').attr('src', '#')
			modal.find('.modal-body .user-email').text('E-Mail')
			modal.find('.modal-body .user-type').text('Type')
		}
	})

});
$(document).ready(function () {

	// Off-Canvas
	$('[data-toggle="offcanvas"]').click(function () {
		$('.row-offcanvas').toggleClass('active');
	});

});
//# sourceMappingURL=dashboard.js.map
