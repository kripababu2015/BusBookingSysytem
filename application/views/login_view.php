<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo  base_url('/css/login.css');?>" media="all"/>
</head>
<body class="login">
	<form action="<?php echo base_url()?>main/login_action" method="post">

		<h1 class="white title padding font">Bon Voyage</h1>

		<div class="padding log">
			
			
			
			<h1 class="white font p-t" >Login</h1><br>
			<input class="txt" type="email" name="email" placeholder="E-mail" required><br><br>
			<input  class="txt" type="password" name="pass" required placeholder="password"><br><br>
			<input type="submit" name="login" value="Login" class="b-log"><br>

			 
			<a class="white link1" href="<?php echo base_url()?>main/register">Registeration</a>
			<a class="white link2" href="">Forgot password?</a>
			</div>
			
		</div>	
	</form>

</body>
</html>