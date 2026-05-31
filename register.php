<?php
include("includes/connection.php");
session_start();
$errors = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = isset($_POST['role']) ? $_POST['role'] : 'student';

    if(empty($name) || empty($email) || empty($_POST['password'])){
        $errors[] = "All fields are required.";
    } else {
        $sql = "SELECT id FROM users WHERE email='$email' LIMIT 1";
        $res = mysqli_query($connection, $sql);
        if(mysqli_num_rows($res) > 0){
            $errors[] = "Email already registered.";
        } else {
            $insert = "INSERT INTO users (name,email,password,role) VALUES ('$name','$email','$password','$role')";
            if(mysqli_query($connection, $insert)){
                header('Location: /port/login.php');
                exit;
            } else {
                $errors[] = "Registration failed.";
            }
        }
    }
}
include("includes/header.php");
?>
<div class="row justify-content-center">
  <div class="col-md-6">
    <h3 class="text-white">Register</h3>
    <?php if($errors): ?>
      <div class="alert alert-danger">
          <?php foreach($errors as $e) echo '<div>'.htmlspecialchars($e).'</div>'; ?>
      </div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group text-white"><label>Name</label><input class="form-control cl" name="name" required></div>
      <div class="form-group text-white"><label>Email</label><input class="form-control cl" name="email" type="email" required></div>
      <div class="form-group text-white"><label>Password</label><input class="form-control cl" name="password" type="password" required></div>
      <div class="form-group text-white"><label>Role</label>
        <select name="role" class="form-control ">
          <option class="um text-white" value="student ">Student</option>
          <option  class="um text-white" value="staff">Staff</option>
        </select>
      </div>
      <button class="btn cow">Register</button>
    </form>
  </div>
</div>
<?php include("includes/footer.php"); ?>