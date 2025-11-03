<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 50px; }
    .container { max-width: 600px; margin: auto; background: white; padding: 30px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    h2 { color: #333; }
    .success { background: #dff0d8; color: #3c763d; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
    .user-info { background: #f9f9f9; padding: 15px; border-radius: 4px; margin: 20px 0; }
    a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #d9534f; color: white; text-decoration: none; border-radius: 4px; }
    a:hover { background: #c9302c; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Welcome!</h2>
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="success">
        <p><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
      </div>
    <?php endif ?>
    
    <div class="user-info">
      <h3>User Information</h3>
      <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
      <p><strong>Status:</strong> Logged in successfully</p>
    </div>
    
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
