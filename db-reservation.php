<?php
require("connection.php");

if(isset($_POST['submit'])){
  $reserveDate = $_POST['reserveDate'];
  $reserveTime = $_POST['reserveTime'];
  $reserveType = $_POST['reserveType'];
  $numGuests = $_POST['numGuests'];

  $insertReservation = "INSERT INTO tablereservation (reserveDate, reserveTime, reserveType, numGuests) VALUES ('$reserveDate', '$reserveTime', '$reserveType', '$numGuests')";
  $dbConnect->query($insertReservation);

  $reserveId = $dbConnect->insert_id; // Get the generated reserveId

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $age = $_POST['age'];
  $contactNum = $_POST['contactNum'];
  $emailAdd = $_POST['emailAdd'];
  $homeAdd = $_POST['homeAdd'];
  $foodAllergies = $_POST['foodAllergies'];

  $insertCustomer = "INSERT INTO customerlists (customerId, firstName, lastName, age, contactNum, emailAdd, homeAdd, foodAllergies) VALUES ('$reserveId', '$firstName', '$lastName', '$age', '$contactNum', '$emailAdd', '$homeAdd', '$foodAllergies')";
  $dbConnect->query($insertCustomer);

  header("Location: reservation.php"); // Redirect back to the reservation page
}

$dbConnect->close();
?>
