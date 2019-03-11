<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="lib/jquery-3.3.1.min.js"></script>
<script src="lib/main.js"></script>
<script src="lib/vue.min.js"></script>
<script src="lib/angular.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	
<div class="form">
	<div class="log">
		<li class="login log-active"><a href="#login">LOGIN</a></li>
		<li class="signup"><a href="#signup">SIGNUP</a></li>
	</div>
		<div id="login">
			<form action="#" method="post">
				<div class="form-header">	
					<h3 style="text-align: center;"> Login </h3>
				</div>
				<div class="form-body">
					<input type="text" name="nama" placeholder="Nama">
					<input type="password" name=" password" placeholder="Password">
				</div>
				<div class="form-footer">
					<input type="submit" name="submit"value="Login">
				</div>
			</form>
		</div>

		<div id="signup" class="inactive">
		<form action="#" method="post">
			<div class="form-header">	
				<h3 style="text-align: center;"> Sign Up </h3>
			</div>
			<div class="form-body">
				<input type="text" name="nama" placeholder="Nama">
				<input type="password" name="password" id="password" placeholder="Password">
				<input type="password" name="re-type" id="re-password" placeholder="Re-type Password">
			</div>
			<div class="form-footer">
				<input type="submit" name="submit" onclick="password()" value="Sign Up">
			</div>
		</form>
	</div>
</div>
<script src="lib/jquery-3.3.1.min.js"></script>
<script src="lib/main.js"></script>
</body>
</html>