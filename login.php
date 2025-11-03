<?php include('process.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 50px; }
    .form-container { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    h2 { text-align: center; color: #333; }
    .input-group { margin-bottom: 15px; }
    label { display: block; margin-bottom: 5px; color: #666; }
    input[type="text"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
    button { width: 100%; padding: 10px; background: #337ab7; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
    button:hover { background: #286090; }
    .error { background: #f2dede; color: #a94442; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
    p { text-align: center; margin-top: 15px; }
    a { color: #337ab7; text-decoration: none; }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>
    <?php if (count($errors) > 0) : ?>
      <div class="error">
        <?php foreach ($errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
      </div>
    <?php endif ?>
    <form method="post" action="login.php">
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" required>
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>
      <div class="input-group">
        <button type="submit" name="login_user">Login</button>
      </div>
      <p>Not yet a member? <a href="signup.php">Sign up</a></p>
    </form>
  </div>
</body>
</html>
