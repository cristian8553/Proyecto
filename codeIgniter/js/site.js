$(document).ready(function(){
	console.log("iniciando sitio");

	$("#form").validate({
		rules: {
			nombre: {
				required: true,
				alphas: true
			},
			edad: {
				required: true,
				numbers: true
			},
		},
		submitHandler: function(form){
			form.submit();		
		},

		highlight: function(element){
			$(element).parent().removeClass('has-success').addClass('has-error');
		},
		success: function(element){
			$(element).parent().removeClass('has-error').addClass('has-success');
		}
	});

	jQuery.validator.addMethod("alphas", function(value, element) {
	  // allow any non-whitespace characters as the host part
	  return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );
	}, 'Solo se admiten caracteres');

	jQuery.validator.addMethod("numbers", function(value, element) {
	  // allow any non-whitespace characters as the host part
	  return this.optional( element ) || /^[0-9]+$/.test( value );
	}, 'Solo se admiten numeros');

	$("#guardar").prop('disabled', 'disabled');

	$("#form").on('keyup blur', function(){
		if($("#form").valid()){
			$("#guardar").prop('disabled', false);
		}else{
			$("#guardar").prop('disabled', 'disabled');
		}
	});

});


















