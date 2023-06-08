<?php
require("connection.php");

if(isset($_POST['login'])) {
  $adminUsername = $_POST["adminEmail"];
  $adminPassword = $_POST["adminPassword"];

  $adminId = "SELECT adminId FROM adminaccount WHERE adminUsername = '$adminUsername' AND adminPassword = '$adminPassword'";
  $adminIdResult = $dbConnect->query($adminId);

  if ($adminIdResult->num_rows > 0) {
    // Authentication successful
    session_start();
    $adminData = $adminIdResult->fetch_assoc();
    $_SESSION['adminId'] = $adminData['adminId'];
    header("Location: admin-panel.php");
    exit();
  } else {
    // Authentication failed
    echo "<script>alert('Invalid email or password. Please try again.');</script>";
    echo "<script>window.location.href = 'admin.php';</script>";
    exit();
  }
}
?>
