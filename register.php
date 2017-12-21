<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="login.js"></script>
</head>
<body>
  <div class="login-page">
      <div class="form">
        <form class="register-form" action="register.php" method="post">
          <!-- display validation errors here -->
          <?php include('errors.php');?>
          <input type="text" placeholder="username" name="username"/>
          <input type="email" placeholder="email address" name="email" />
          <input type="password" placeholder="password" name="password_1" />
          <input type="password" placeholder="confirm password" name="password_2" />
          <input class="create" name="create" type="submit" value="create">
          <p class="message">Already registered? <a href="login.php">Log in!!</a></p>
        </form>
      </div>
  </div>
</form>
</body>
</html>




