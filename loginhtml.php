<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login-page</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <?php if (isset($_GET['error'])) { ?>

<p class="error" style="color:red; padding-left:25px; padding-top :15px;"><?php echo $_GET['error']; ?></p>

<?php } ?>
      <form action="login.php" method="post">
        <div class="txt_field">
          <input type="text" name="username">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="sign.html">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>