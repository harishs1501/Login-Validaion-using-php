<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:lightblue">

<div class="container" style="margin: 125px">
<div class="row">
	<div class="col-3"></div>
	<div class="col-6"  style="background-color:lightgrey">
		<h1 align="center">Login Form</h1>
		<form method="POST" action="logval.php">
			<div class="form-group">
				<label class="form-label">Username</label>
				<input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Your Username/Email">
			</div>
			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="psd" id="psd" placeholder="Enter Your password">
			</div>
			<div class="form-group" align="right">
				<input type="checkbox" class="form-control-checked" name="re" id="re">
			<label class="form-label">Remember me</label>
			</div><br>
			<div class="form-group" align="center">
				<input type="submit" class="btn btn-primary" name="Login" value="Login">
				<input type="reset" class="btn btn-warning" name="reset" value="Reset" align="right"> 
			</div>
		</form>
	</div>
</div>
</div>
</body>
</html>