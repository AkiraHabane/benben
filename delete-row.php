<?php

require("connection.php");

// Check if the form is submitted
if (isset($_POST['deleteRow'])) {
  // Get the ID to delete
  $deleteId = $_POST['deleteId'];

  // Delete the reservation
  $deleteReservationQuery = "DELETE FROM tablereservation WHERE reserveId = $deleteId";
  $dbConnect->query($deleteReservationQuery);

  // Delete the customer
  $deleteCustomerQuery = "DELETE FROM customerlists WHERE customerId = $deleteId";
  $dbConnect->query($deleteCustomerQuery);

  // Update the reservation IDs
  $updateReservationsQuery = "SET @count := 0;";
  $dbConnect->query($updateReservationsQuery);

  $updateReservationsQuery = "UPDATE tablereservation
    SET reserveId = (@count := @count + 1)
    ORDER BY reserveId;";
  $dbConnect->query($updateReservationsQuery);

  // Update the customer IDs
  $updateCustomersQuery = "SET @count := 0;";
  $dbConnect->query($updateCustomersQuery);

  $updateCustomersQuery = "UPDATE customerlists
    SET customerId = (@count := @count + 1)
    ORDER BY customerId;";
  $dbConnect->query($updateCustomersQuery);

  // Reset auto-increment value
  $resetQuery = "ALTER TABLE tablereservation AUTO_INCREMENT = 1;";
  $dbConnect->query($resetQuery);

  $resetQuery = "ALTER TABLE customerlists AUTO_INCREMENT = 1;";
  $dbConnect->query($resetQuery);

  // Redirect back to admin-panel.php
  header("Location: admin-panel.php");
  exit();
}

?>
