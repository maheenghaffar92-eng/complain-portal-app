<?php include("includes/connection.php"); include("includes/header.php"); ?>
<div class="jumbotron cf">
  <h1 class="display-4 text-white">Welcome to the Complaint Portal</h1>
  <p class="lead text-white">Submit Complaints  and let Admin manage them efficiently.</p>
  <hr class="my-4">
  <?php if(!isset($_SESSION['user_id'])): ?>
    <a class="btn cow btn-lg" href="/port/register.php" role="button">Get Started</a>
  <?php else: ?>
    <a class="btn cow btn-lg" href="<?php echo $_SESSION['role']=='admin'?'/port/admin/dashboard.php':'/port/user/dashboard.php'; ?>" role="button">Go to Dashboard</a>
  <?php endif; ?>
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
