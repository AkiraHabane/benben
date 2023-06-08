<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Ben & Ben Hub</title>
  <style type="text/css">
    body, html {
      background-color: #efe6d5;
    }
  </style>
</head>
<body>

  <div class="container-xl my-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card shadow">
          <div class="card-header">
            <p class="card-title display-4 fw-bold text-center">CUSTOMER LISTS</p>
          </div>
          <div class="card-body px-4">

            <form action="delete-row.php" method="post">
              <div class="row mb-3">
                <div class="col">
                  <label for="deleteId">Delete ID</label>
                  <input type="number" name="deleteId" id="deleteId" min="0">
                  <input type="submit" name="deleteRow" placeholder="Delete" class="btn btn-danger btn-sm">
                </div>
              </div>
            </form>

            <form action="delete-date.php" method="post">
              <div class="row">
                <div class="col">
                  <label for="deleteDate">Delete Reservation Date</label>
                  <input type="date" name="deleteDate" id="deleteDate">
                  <input type="submit" name="deleteRow" placeholder="Delete" class="btn btn-danger btn-sm">
                </div>
              </div>
            </form>

            <div class="card shadow-sm mt-3">
              <div class="card-body">

                <table class="table">
                  <thead>
                    <tr>
                      <th>Reservation ID</th>
                      <th>Reservation Date</th>
                      <th>Reservation Time</th>
                      <th>Reservation Type</th>
                      <th>Number of Guests</th>
                      <th>View</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php

                    require("connection.php");

                    $query = "SELECT * FROM tablereservation INNER JOIN customerlists ON tablereservation.reserveId = customerlists.customerId";
                    $result = $dbConnect->query($query);

                    if ($result->num_rows > 0) {
                      while ($dataRow = $result->fetch_assoc()) {
                        echo " <tr>
                                <td> $dataRow[reserveId] </td>
                                <td> $dataRow[reserveDate] </td>
                                <td> $dataRow[reserveTime] </td>
                                <td> $dataRow[reserveType] </td>
                                <td> $dataRow[numGuests] </td>
                                <td>
                                  <button type='button' class='btn btn-primary btn-sm' data-bs-target='#$dataRow[customerId]' data-bs-toggle='modal'>RESERVEE</button>
                                </td>
                              </tr>

                              <div class='modal fade' id='$dataRow[customerId]'>
                                <div class='modal-dialog'>
                                  <div class='modal-content'>
                                    <div class='modal-header'>
                                      <p class='modal-title lead fw-bold'>Reservee</p>
                                    </div>

                                    <div class='modal-body'>
                                      <p class='d-block'><span class='fw-bold'>Customer ID : </span> $dataRow[customerId] </p>
                                      <p class='d-block'><span class='fw-bold'>First Name : </span> $dataRow[firstName] </p>
                                      <p><span class='fw-bold'>Last Name : </span> $dataRow[lastName] </p>
                                      <p><span class='fw-bold'>Age : </span> $dataRow[age] </p>
                                      <p><span class='fw-bold'>Contact Number : </span> $dataRow[contactNum] </p>
                                      <p><span class='fw-bold'>Email Address : </span> $dataRow[emailAdd] </p>
                                      <p><span class='fw-bold'>Home Address : </span> $dataRow[homeAdd] </p>
                                      <p><span class='fw-bold'>Food Allergies : </span> $dataRow[foodAllergies] </p>
                                    </div>

                                  </div>
                                </div>
                              </div>
                              ";
                      }
                    } else {
                      echo "
                      <p class='display-6 text-center'>No data yet.</p>
                      ";
                    }
                    ?>

                  </tbody>

                </table>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
