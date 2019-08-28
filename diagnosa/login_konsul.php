<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css"> -->

</head>

<body>
<div class="account-container">
	<div class="content clearfix">
		<form action="?page=ceklogin_konsul" method="post">
			<h1><font  color='#19bc9c'>Login Tamu</font></h1>
			<div class="login-fields">
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /username -->

				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
			</div> <!-- /login-fields -->

			<div class="login-actions">
				<button class="button btn btn-success btn-large">Login In</button>
			</div> <!-- .actions -->
		</form>

		<p> Jika Anda belum memiliki Account pada sistem ini Anda harus <a href="?page=formtamu_konsul">Registrasi disini </a></p>

	</div> <!-- /content -->

</div> <!-- /account-container -->
</body>
</html>
