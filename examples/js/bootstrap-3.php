<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- you can also add inside the content attribute "maximum-scale=1.0, user-scalable=no", which will disable the zoom functions on your site (making it feel more like a native app) -->

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</head>

<body>
	<div class="container">
    	<!-- adding the class "form-inline" to the form element will make the form be inline (all the elements of the form) -->
    	<form role="form">
        	<div class="form-group">
            	<label for="name">Full Name:</label>
                <input type="text" id="name" name="name" class="form-control">
                <!-- the default for form-control inside of a form-group is a 100% (responsive) block form element -->
            </div>
            
            <div class="checkbox">
            	<label><input type="checkbox"> Click me!</label> <!-- you can actually put the input inside of the label...inside of checkbox, the checkbox input type will remain inline to sit next to the text -->
            </div>
            
            <input type="submit" class="btn btn-danger" value="submit!">
            <!-- you can also give buttons the class active or disabled -->
        </form>
        
        <hr>
        
        <form class="form-horizontal" role="form">
        	<!-- form-horizontal will set up the 12-column grid system inside of each form-group div-->
        	<div class="form-group">
            	<label for="email" class="control-label col-sm-3">Email: </label>
                <div class="col-sm-9">
                	<input type="text" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
            	<label for="address" class="control-label col-sm-3">Address: </label>
                <div class="col-sm-9">
                	<input type="text" id="address" name="address" class="form-control">
                </div>
            </div>
            <!-- the attribute disabled will lock a field or a grouping inside a fieldset -->
            <fieldset disabled>
                <div class="form-group">
                    <label for="province" class="control-label col-sm-3">Province: </label>
                    <div class="col-sm-3">
                        <input type="text" id="province" name="province" class="form-control">
                    </div>
                    <label for="country" class="control-label col-sm-3">Country: </label>
                    <div class="col-sm-3">
                        <input type="text" id="country" name="country" class="form-control">
                    </div>
                </div>
            </fieldset>
        </form>
        
        <hr>
        
        <!-- bootstrap provides a really, really easy way to show feedback within form fields -->
        <form class="form-horizontal">
        <!-- success is green! -->
            <div class="form-group has-feedback has-success">
        		<label for="success" class="control-label col-sm-2">Success Message: </label>
                <div class="col-sm-10">
                	<input type="text" id="success" name="success" class="form-control">
                    <span class="glyphicon glyphicon-ok form-control-feedback">
                </div>            	
            </div>
            <!-- warning is yellow -->
            <div class="form-group has-feedback has-warning">
        		<label for="warning" class="control-label col-sm-2">Warning Message: </label>
                <div class="col-sm-10">
                	<input type="text" id="warning" name="warning" class="form-control">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback">
                </div>            	
            </div>
            <!-- error is red -->
            <div class="form-group has-feedback has-error">
        		<label for="error" class="control-label col-sm-2">Error Message: </label>
                <div class="col-sm-10">
                	<input type="text" id="error" name="error" class="form-control">
                    <span class="glyphicon glyphicon-remove form-control-feedback">
                </div>            	
            </div>
        </form>
    </div>

<script>
	/* make the active and disabled links go nowhere */
	$(".active, .disabled").each(function(){
		$(this).on("click", function(event){
			event.preventDefault();
		});
	});
</script>
</body>
</html>
