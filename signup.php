<!DOCTYPE html>

<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<head>
<link href="./dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./select/dist/css/bootstrap-select.css" rel="stylesheet">
<link href="./select/dist/css/bootstrap-select.css.map" rel="stylesheet">
<link href="./select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="./anim.css" rel="stylesheet">


</head>
<body>


<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" id="data" enctype="multipart/form-data" method="post" >
			<h2> Sign Up </h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">		
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="1">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="1">
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="phone" id="phone" maxlength="10" size="10" class="form-control input-lg" placeholder="Phone Number" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="roll" id="roll" maxlength="12" size="12" class="form-control input-lg" placeholder="Roll Number" tabindex="1">
					</div>
				</div>

			</div>
			

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="grad_year" id="grad_year" maxlength="4" size="4" class="form-control input-lg" placeholder="Graduation Year" tabindex="1">
					</div>
				</div>
			</div>
    <textarea class="form-control" rows="3" maxlength="500"  name="message" id="message" class="message" placeholder="any requirements"></textarea>
	
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<input type="submit" id="Register" name="Register" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
				</div>
				</div>
		</form>
	</div>
</div>

   </div>

<div class="modal"><!-- Place at bottom of page --></div>
    <script src="./dist/js/jquery.js"></script>

    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./select/js/bootstrap-select.js"></script>    
    <script src="./dist/js/bootstrapfilestyle.js"></script>
    <script src="scrip.js"></script>
</body>
</html>

