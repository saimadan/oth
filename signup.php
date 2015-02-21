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
                        <input type="text" name="team_name" id="team_name" class="form-control input-lg" placeholder="Team Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
							<select class="selectpicker" data-size="5" id="teamsize" name="teamsize">
									<option>Team Size</option>
									<option>1</option>
									<option>2</option>
							</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">		
					<div class="form-group">
                        <input type="text" name="name_contestant1" id="name_contestant1" class="form-control input-lg" placeholder="Enter Contestant1 Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="email" name="email1" id="email1" class="form-control input-lg" placeholder="Email Address" tabindex="1">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="phone_contestant1" id="phone_contestant1" maxlength="10" size="10" class="form-control input-lg" placeholder="Phone Number Contestant1" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="college_contestant1" id="college_contestant1" maxlength="12" size="12" class="form-control input-lg" placeholder="college Contestant1" tabindex="1">
					</div>
				</div>
			</div>
			

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="name_contestant2" id="name_contestant2" class="form-control input-lg" placeholder="Enter Contestant2 Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="email" name="email1" id="email1" class="form-control input-lg" placeholder="Email Address" tabindex="1">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="phone_contestant2" id="phone_contestant2" maxlength="10" size="10" class="form-control input-lg" placeholder="Phone Number Contestant2" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="college_contestant2" id="college_contestant2" maxlength="12" size="12" class="form-control input-lg" placeholder="college Contestant2" tabindex="1">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="password" name="password" id="password" maxlength="4" size="4" class="form-control input-lg" placeholder="Team Password" tabindex="1">
					</div>
				</div>
			</div>	
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
    <script src="js/scrip.js"></script>
</body>
</html>

