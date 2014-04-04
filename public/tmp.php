<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Makes "field" required and an email address.</title>

<link rel="stylesheet" href="css/bootstrap.css">
 
</head>
<body>
<form action="" id="contact-form" class="form-horizontal">
	<fieldset>
	<div class="control-group">
      <label class="control-label" for="name">Your Name</label>
      <div class="controls">
        <input type="text" class="input-xlarge" name="name" id="name">
      </div>
    </div>
    
    <div class="form-actions">
      <button type="submit" class="btn btn-primary btn-large">Submit</button>
      <button type="reset" class="btn">Cancel</button>
    </div>
  </fieldset>
</form>


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script>

$(document).ready(function(){
	 
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
	    subject: {
	      minlength: 2,
	      required: true
	    },
	    message: {
	      minlength: 2,
	      required: true
	    }
	  },
	  highlight: function(element) {
	    $(element).closest('.control-group').removeClass('success').addClass('error');
	  },
	  success: function(element) {
	    element
	    .text('OK!').addClass('valid')
	    .closest('.control-group').removeClass('error').addClass('success');
	  }
	 });
	}); // end document.ready
	
</script>
</body>
</html>