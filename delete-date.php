<?php

  require("connection.php");

  if(isset($_POST["deleteRow"])) {

    $rdate = $_POST["deleteDate"];

    $deleteCLRow = "DELETE customerlists FROM customerlists INNER JOIN tablereservation ON customerlists.customerId = tablereservation.reserveId WHERE reserveDate = '$rdate' ";
    $deleteCLResult = $dbConnect->query($deleteCLRow);

    $deleteTRRow = "DELETE FROM tablereservation WHERE reserveDate = '$rdate'";
    $deleteTRResult = $dbConnect->query($deleteTRRow);

    header("location: admin-panel.php");

  }

?>