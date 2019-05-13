<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="container-fluid">
<div class="row">
	<div class="col-sm-3">
		<h4>Login Here..</h4>
		<hr style="border:1px solid #d3d3d3; width:100%;" />
		<form method="POST" action="login.php" enctype = "multipart/form-data">
			<div class="form-group">
				<label class="control-label">Username:</label>
				<input name="username" type="text" class="form-control" id="username"/>
			</div>
			<div class="form-group">
				<label class="control-label">Password:</label>
				<input name="password" type="password" class="form-control" id="password"/>
			</div><br />
			<div class = "form-group">
				<input type="submit" value="Login" class="btn btn-primary btn-block">
			</div>
		</form>
	</div><!-- /  class="col-sm" -->
	<div class="col-sm-6">
		<img src = "<?php echo BASEURL?>public/img/logo/logo.png" height = "449px" width = "100%" />
	</div><!-- /  class="col-sm" -->
</div><!-- / class="row" -->
</div><!-- / class="container" -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// --
		<div class = "container-fluid" style = "margin-top:70px;">
			<div class = "col-lg-3 well">
				<br />
				<br />
				<h4>Login Here..</h4>
				<hr style = "border:1px solid #d3d3d3; width:100%;" />
				<form method="POST" action="login.php" enctype = "multipart/form-data">	=
					<div id = "username_warning" class = "form-group">
						<label class = "control-label">Username:</label>
						<input name="username" type="text" class="form-control" id="username"/>
					</div>
				  <div id = "password_warning" class = "form-group">
					<label class = "control-label">Password:</label>
					  <input name="password" type="password" class="form-control" id="password"/>
					</div>
					<br />
					<div class = "form-group">
						<input type="submit" value="Login" class="btn btn-primary btn-block">
						<span class = "glyphicon glyphicon-save"></span>
					</div>
				</form>
				<div id = "result"></div>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-8 well">
				<img src = "<?php echo BASEURL?>public/img/logo/logo.png" height = "449px" width = "100%" />
			</div>
		</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->