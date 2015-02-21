<?php include('common-up.php');?>

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
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
							<select class="selectpicker" data-size="5" id="branch" name="branch">
									<option>Computer Science</option>
									<option>Electrical &amp;Electronics</option>
									<option>Civil</option>
									<option>Mechanical</option>
									<option>Information Technology</option>
									<option>Electronics &amp; Communications</option>
							</select>
					</div>
				</div>
			</div>
			
		
		<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label for="gre">GRE Score</label>
                        <input type="text" name="gre" id="gre" maxlength="3" size="3" class="form-control input-lg" placeholder="gre score" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
			    	<div class="form-group">
					    <label for="gre_score">GRE ScoreCard</label>
						<input type="file" name="gre_score" id="gre_score" class="filestyle">
	     				<!-- <p class="help-block">please dont upload image file larger than 500kb</p> -->
	  				</div>
			

			</div>

			</div>
			

		<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						    <label for="cat">CAT Score</label>
                        <input type="text" name="cat" id="cat" maxlength="5" size="5" class="form-control input-lg" placeholder="cat score" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
						    <label for="cat_score">CAT ScoreCard</label>
							<input type="file" name="cat_score" class="filestyle"  id="cat_score">
					<!-- 	 <p class="help-block">please dont upload image file larger than 500kb</p>
					 -->  	</div>
				</div>
			</div>


		<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
    					<label for="toefl">TOEFL Score</label>
	
                        <input type="text" name="toefl" id="toefl" maxlength="3" size="3" class="form-control input-lg" placeholder="toefl score" tabindex="1">
	
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">

					<div class="form-group">
						<label for="toefl_score">TOEFL ScoreCard</label>
						<input type="file" name="toefl_score" class="filestyle" id="toefl_score">
				    	 <!-- <p class="help-block">please dont upload image file larger than 500kb</p> -->
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
<?php include('common-down.php');?>
