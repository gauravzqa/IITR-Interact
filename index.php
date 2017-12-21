<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="login.js"></script>
</head>
<body>
	<div class="header">
    <h2>Home page</h2>
  </div>

  <div class="content">
      <?php 
      var_dump($_SESSION['success']);
      if (isset($_SESSION['success'])) :?>
         <div class="error success">
            <h3>
              <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                  echo $_SESSION['username'];
              ?>
            </h3>
         </div>
      <?php endif ?>

      <?php if (isset($_SESSION['username'])): ?> 
        <p>Welcome <strong><?php echo $_SESSION['username'] ?></strong></p>
        <p><a href="index.php?logout=1" style="color:red;">Logout</a></p>
      <?php  endif ?>
  </div>



</body>
</html>




