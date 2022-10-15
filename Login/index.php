<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Ndang Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<?php if (isset($_GET['success'])) { ?>
        	<p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Email</label>
     	<input type="text" name="email" placeholder="Email" required autocomplete="off"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required autocomplete="off"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>