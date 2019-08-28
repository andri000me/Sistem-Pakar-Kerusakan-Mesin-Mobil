<!DOCTYPE html>


<body>

<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="?page=aksiregistrasi_konsul" method="post">
		
			<h1>Regisrasi Account</h1>			
			
			<div class="login-fields">
				
				
				<div class="field">
					<label for="firstname">Nama:</label>
					<input type="text" id="nama" name="nama" value="" placeholder="Nama" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Jenis Kelamin:</label>	
					<input type="radio" name="kelamin" value="Pria" checked>Pria
					<input type="radio" name="kelamin" value="Wanita">Wanita
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Alamat:</label>	
					<td><textarea name="alamat" placeholder="Alamat" class="login"></textarea>
				</div> <!-- /field -->				
				
				<div class="field">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="confirm_password">Confirm Password:</label>
					<input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="login"/>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				
									
				<button class="button btn btn-primary btn-large">Register</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->

<!-- Text Under Box -->
<div class="login-extra">
	Jika anda akan login <a href="?page=konsul">Login ke Account Anda</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>
