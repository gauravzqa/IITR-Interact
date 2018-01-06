<?php require('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="login.js"></script>
</head>
<body>
  <div class="backimage">
    <img class="image" src="images/q.png">
  </div>

	<div class="login-page">
  		<div class="form">
    		<form class="login-form" method="POST">
          <?php require('errors.php'); ?>
      			<input type="text" placeholder="username" name="username"/>
      			<input type="password" placeholder="password" name="password"/>
      			<input class="create"  name="login" type="submit">
      			<p class="message">Not registered? <a href="register.php">Create an account</a></p>
    		</form>
  		</div>
	</div>
</form>
</body>
</html>