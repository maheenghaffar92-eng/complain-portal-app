<?php
include("includes/connection.php");
session_start();
$error = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $res = mysqli_query($connection, $sql);
    if($user = mysqli_fetch_assoc($res)){
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            if($user['role'] === 'admin'){
                header('Location: /port/admin/dashboard.php');
            } else {
                header('Location: /port/user/dashboard.php');
            }
            exit;
        } else {
            $error = 'Invalid credentials.';
        }
    } else {
        $error = 'User not found.';
    }
}
include("includes/header.php");
?>
<div class="row justify-content-center">
  <div class="col-md-6">
    <h3 class="text-white">Login</h3>
    <?php if($error): ?>
      <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group text-white"><label>Email</label><input class="form-control" name="email" type="email" required></div>
      <div class="form-group text-white"><label>Password</label><input class="form-control" name="password" type="password" required></div>
      <button class="btn cow">Login</button>
    </form>
  </div>
</div>
<?php include("includes/footer.php"); ?>
<style>
@media (max-width: 576px) {
 .footer{
  width:auto ;  
 font-size:13px; 

  
}
}
</style>