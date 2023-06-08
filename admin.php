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
      background-image: url(images/Ben&Ben-Interior.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      height: 100vh;
    }
  </style>
</head>
<body>

  <div class="container-xl py-auto">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card my-5 align-items-center">
          <div class="card-header">
            <p class="card-title display-5 fw-bold text-center">Login Admin</p>
          </div>
          <div class="card-body px-5">
            <div class="table">
              <form action="db-admin.php" method="post">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <label for="adminEmail" class="my-2">Email</label>
                    <input type="email" name="adminEmail" id="adminEmail" class="container-fluid mb-2" required>
                  </div>
                  <div class="col-md-6">
                    <label for="adminPassword" class="my-2">Password</label>
                    <input type="password" name="adminPassword" id="adminPassword" class="container-fluid mb-2" required>
                  </div>
                  <div class="text-center">
                    <input type="submit" name="login" value="Login" class="btn btn-outline-primary mt-4 px-4">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
