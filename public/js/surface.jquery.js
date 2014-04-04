
$(document).ready(function()
{
	$('#contact-form').validate(
	{
		rules: {
			name: {
				minlength: 2,
				required: true
		    },
		    email: {
		    	required: true,
		    	email: true
		    },
		    browser: {
		    	required: true
		    },
		    reason: {
				minlength: 5,
				required: true
		    }
		},
		
		highlight: function(element) {
			$(element).closest('.control-group').removeClass('hide').addClass('error');
		},
		
		success: function(element) {
			$(element).remove();
		}
	});
}); // end d.ready
	