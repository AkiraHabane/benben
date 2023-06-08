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
  </style>
</head>
<body>

<!-- Dashboard -->
  <nav class="navbar navbar-expand-md bg-light py-3 ps-5">
    <a href="#Ben&Ben-Hub" class="navbar-brand fw-bold">
      <img src="images/B&BLogo.png" alt="Ben & Ben Hub Logo" class="align-middle" height="30" width="60">
      BEN & BEN HUB
    </a>
    <button type="button" class="navbar-toggler" data-bs-target="#ourDashboard" data-bs-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="ourDashboard">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#about-us" class="text-dark text-decoration-none me-3">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a href="#menu" class="text-dark text-decoration-none me-3">MENU</a>
        </li>
        <li class="nav-item">
          <a href="reservation.php" class="text-dark text-decoration-none me-3">RESERVATION</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Home -->
  <section id="Ben&Ben-Hub">
  <div class="container-fluid">
    <div class="carousel slide carousel-fade carousel-dark" id="ourInterior" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" class="active" data-bs-target="#ourInterior" data-bs-slide-to="0"></button>
        <button type="button" data-bs-target="#ourInterior" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#ourInterior" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#ourInterior" data-bs-slide-to="3"></button>
      </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/restau-1.1.png" alt="restaurant interior design" class="w-100" style="height: 85vh;">
          </div>
          <div class="carousel-item">
            <img src="images/restau-2.2.png" alt="restaurant interior design" class="w-100" style="height: 85vh;">
          </div>
          <div class="carousel-item">
            <img src="images/restau-3.3.png" alt="restaurant interior design" class="w-100" style="height: 85vh;">
          </div>
          <div class="carousel-item">
            <img src="images/restau-4.4.png" alt="restaurant interior design" class="w-100" style="height: 85vh;">
          </div>
        </div>
    </div>
  </div>

    <div class="container-xl my-5">
      <div class="row justify-content-center align-top">
        <div class="col-xl-3 my-3 text-center">
          <h4 class="fw-bold mb-4">LOCATION</h4>
          <a href="https://www.google.com/maps/place/Pamantasan+ng+Lungsod+ng+Maynila/@14.58679,120.9739887,17z/data=!3m1!4b1!4m6!3m5!1s0x3397ca2336770053:0x1b731714778d3506!8m2!3d14.58679!4d120.9761774!16zL20vMGZ4MnNy" target="_blank" class="text-decoration-none text-dark d-block m-0">General Luna, corner Muralla St, Intramuros, Manila</a>
        </div>
        <div class="col-xl-3 my-3 text-center">
          <h4 class="fw-bold mb-4">HOURS</h4>
          <p class="m-0">Monday - Saturday</p>
          <p class="m-0">8:00 am - 9:00 pm</p>
        </div>
        <div class="col-xl-3 my-3 text-center">
          <h4 class="fw-bold mb-4">CONTACT</h4>
          <a href="mailto:benandbenhub@gmail.com" class="text-decoration-none text-dark d-block m-0">benandbenhub@gmail.com</a>
          <a href="tel:84522245" class="text-decoration-none text-dark d-block m-0">8452-2245</a>
        </div>
      </div>
  </section>

<!-- About Us -->
  <section id="about-us" class="bg-light">
    <div class="container-xl mt-5 py-5">
      <div class="row justify-content-center align-items-center">
        <div class="text-md-start col-md-6 lead text-center" style="white-space: pre-wrap; text-indent: 10%">Our love for music is the reason why we built this restaurant. Ben and Ben Music has a big impact on our lives; their music helps us recover from our down times. Building this restaurant is just showing our appreciation to Ben and Ben Music by staying by our side at all times. At Ben & Ben Hub, our mission is to connect people to the harmonious ambiance of our environment, serve with rhythmic services, and feed with the melodic taste of our foods. We always put our customers first. And we do believe that our love for music, together with our love for food, leads us to envision a restaurant where food and music meet people. Just like the Ben & Ben music, we strive to inspire, connect, and nurture the people—one spirit, one music, one taste, one community, and great love at a time.</div>
        <div class="col-md-5">
          <img src="images/Ben&BenImage.png" alt="Ben & Ben Band" class="img-fluid d-md-block d-none">
        </div>
      </div>
    </div>
  </section>

  <div style="background-image: url(images/bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 100vh;"></div>

<!--Carousels-->

  <section id="menu">
  <div class="container-lg my-5">

  <div class="row">
  <h1 class="display-4 text-center fw-bold mt-4">EXPLORE OUR MENU</h>
  </div>

    <div class="carousel slide carousel-dark" id="ourMenu">
      <div class="carousel-indicators m-0">
        <button type="button" data-bs-target="#ourMenu" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#ourMenu" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#ourMenu" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#ourMenu" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#ourMenu" data-bs-slide-to="4"></button>
      </div>
      <div class="carousel-inner p-5">

        <div class="carousel-item active"> <!--Item 1-->
          <div class="row justify-content-center">

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Bacon Cheddar Potato Skins.jpg" alt="Bacon Cheddar Potato Skins" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#kathangIsip" data-bs-toggle="modal" role="button">Kathang Isip</p>
                  <p class="card-subtitle text-muted">&#8369; 160</p>
                  <p class="card-text text-truncate my-4">Bacon Cheddar Potato Skins</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Sour Cream-Lemon Pie.jpg" alt="Sour Cream-Lemon Pie" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#pagtingin" data-bs-toggle="modal" role="button">Pagtingin</p>
                  <p class="card-subtitle text-muted">&#8369; 135</p>
                  <p class="card-text text-truncate my-4">Sour Cream-Lemon Pie</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Eggplant Rollatini.jpg" alt="Eggplant Rollatini" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#magpahinga" data-bs-toggle="modal" role="button">Magpahinga</p>
                  <p class="card-subtitle text-muted">&#8369; 245</p>
                  <p class="card-text text-truncate my-4">Eggplant Rollatini</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item"> <!--Item 2-->
          <div class="row justify-content-center">

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/California Sushi Rolls.jpg" alt="California Sushi Rolls" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#pasalubong" data-bs-toggle="modal" role="button">Pasalubong</p>
                  <p class="card-subtitle text-muted">&#8369; 220</p>
                  <p class="card-text text-truncate my-4">California Sushi Rolls</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Broccoli Shrimp Alfredo.jpg" alt="Broccoli Shrimp Alfredo" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#arawAraw" data-bs-toggle="modal" role="button">Araw Araw</p>
                  <p class="card-subtitle text-muted">&#8369; 155</p>
                  <p class="card-text text-truncate my-4">Broccoli Shrimp Alfredo</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Chicken Totada Cups.jpg" alt="Chicken Totada Cups" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#lifetime" data-bs-toggle="modal" role="button">Lifetime</p>
                  <p class="card-subtitle text-muted">&#8369; 125</p>
                  <p class="card-text text-truncate my-4">Chicken Tostada Cups</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item"> <!--Item 3-->
          <div class="row justify-content-center">

          <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Pumpkin Pie Latte.jpg" alt="Pumpkin Pie Latte" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#kayumanggi" data-bs-toggle="modal" role="button">Kayumanggi</p>
                  <p class="card-subtitle text-muted">&#8369; 115</p>
                  <p class="card-text text-truncate my-4">Pumpkin Pie Latte</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Crispy Beer-Battered Fish.jpg" alt="Crispy Beer-Battered Fish" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#paninindiganKita" data-bs-toggle="modal" role="button">Paninindigan Kita</p>
                  <p class="card-subtitle text-muted">&#8369; 190</p>
                  <p class="card-text text-truncate my-4">Crispy Beer-Battered Fish</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Potato, Sausage & Kale Soup.jpg" alt="Potato, Sausage & Kale Soup" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#rideHome" data-bs-toggle="modal" role="button">Ride Home</p>
                  <p class="card-subtitle text-muted">&#8369; 170</p>
                  <p class="card-text text-truncate my-4">Potato, Sausage & Kale Soup</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="carousel-item"> <!--Item 4-->
          <div class="row justify-content-center">

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Burnt Custard.jpg" alt="Burnt Custard" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#paalam" data-bs-toggle="modal" role="button">Paalam</p>
                  <p class="card-subtitle text-muted">&#8369; 85</p>
                  <p class="card-text text-truncate my-4">Burnt Custard</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Mexican Homemade Salsa.jpg" alt="Mexican Homemade Salsa" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#sabel" data-bs-toggle="modal" role="button">Sabel</p>
                  <p class="card-subtitle text-muted">&#8369; 110</p>
                  <p class="card-text text-truncate my-4">Mexican Homemade Salsa</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Pasta Fagioli Soup.jpg" alt="Pasta Fagioli Soup" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#miwy" data-bs-toggle="modal" role="button">Make It with You</p>
                  <p class="card-subtitle text-muted">&#8369; 135</p>
                  <p class="card-text text-truncate my-4">Pasta Fagioli Soup</p>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="carousel-item"> <!--Item 5-->
          <div class="row justify-content-center">

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Golden Chicken Nuggets.jpg" alt="Golden Chicken Nuggets" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#doors" data-bs-toggle="modal" role="button">Doors</p>
                  <p class="card-subtitle text-muted">&#8369; 165</p>
                  <p class="card-text text-truncate my-4">Golden Chicken Nuggets</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Favorite Cheeseburger Pizza.jpg" alt="Favorite Cheeseburger Pizza" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#lunod" data-bs-toggle="modal" role="button">Lunod</p>
                  <p class="card-subtitle text-muted">&#8369; 95</p>
                  <p class="card-text text-truncate my-4">Favorite Cheeseburger Pizza</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 my-2">
              <div class="card">
                <img src="foodItems/Garlic-Butter Steak.jpg" alt="Garlic-Butter Steak" class="card-img-top img-fluid">
                <div class="card-body">
                  <p class="card-title fw-bold text-truncate" data-bs-target="#leaves" data-bs-toggle="modal" role="button">Leaves</p>
                  <p class="card-subtitle text-muted">&#8369; 130</p>
                  <p class="card-text text-truncate my-4">Garlic-Butter Steak</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <button type="button" class="carousel-control-prev" data-bs-target="#ourMenu" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button type="button" class="carousel-control-next" data-bs-target="#ourMenu" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>

      <hr class="my-5">

      <div class="text-center">
        <a href="reservation.php">
        <button class="btn btn-md btn-outline-primary rounded-pill px-3 text-center">Reserve Now</button>
        </a>
      </div>

  </section>

<!-- Modals -->
  <div class="modal fade" id="kathangIsip">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Kathang Isip - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">4 large baking potatoes, baked
3 tablespoons canola oil
1 tablespoon grated Parmesan cheese
1/2 teaspoon salt
1/4 teaspoon garlic powder
1/4 teaspoon paprika
1/8 teaspoon pepper
8 bacon strips, cooked and crumbled
1-1/2 cups shredded cheddar cheese
1/2 cup sour cream
4 green onions, sliced</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="pagtingin">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Pagtingin - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">Dough for single-crust pie
1 cup sugar
3 tablespoons plus 1-1/2 teaspoons cornstarch
1 cup whole milk
1/2 cup lemon juice
3 large egg yolks, lightly beaten
1/4 cup butter, cubed
1 tablespoon grated lemon zest
1 cup sour cream
1 cup heavy whipping cream, whipped</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="magpahinga">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Magpahinga - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">1 large eggplant
1 tablespoon salt
1 small onion, chopped
1/4 cup olive oil
2 garlic cloves, minced
1 can (15 ounces) tomato sauce
1 can (14-1/2 ounces) diced tomatoes
1/2 cup chicken broth
1/4 cup tomato paste
2 tablespoons minced fresh parsley
2 teaspoons sugar
1/2 teaspoon salt
1/2 teaspoon dried basil
1/4 teaspoon pepper
1/8 teaspoon crushed red pepper flakes
1 carton (15 ounces) ricotta cheese
1 cup shredded part-skim mozzarella cheese
1/2 cup grated Parmesan cheese
1/4 cup minced fresh parsley
1 large egg, lightly beaten
1/8 teaspoon pepper
3 large eggs, lightly beaten
1 cup seasoned bread crumbs
1 cup grated Parmesan cheese, divided
2 garlic cloves, minced
2 tablespoons minced fresh parsley
Dash each salt and pepper
Oil for frying</p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="pasalubong">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Pasalubong - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">2 cups sushi rice, rinsed and drained
2 cups water
1/4 cup rice vinegar
2 tablespoons sugar
1/2 teaspoon salt
2 tablespoons sesame seeds, toasted
2 tablespoons black sesame seeds
Bamboo sushi mat
8 nori sheets
1 small cucumber, seeded and julienned
3 ounces imitation crabmeat sticks, julienned
1 medium ripe avocado, peeled and julienned</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="arawAraw">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Araw Araw - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">8 ounces uncooked fettuccine
1-pound uncooked medium shrimp, peeled and deveined
3 garlic cloves, minced
1/2 cup butter, cubed
1 package (8 ounces) cream cheese, cubed
1 cup whole milk
1/2 cup shredded Parmesan cheese
4 cups frozen broccoli florets
1/2 teaspoon salt
Dash pepper</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="lifetime">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Lifetime - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">12 corn tortillas (6 inches), warmed
Cooking spray
2 cups shredded rotisserie chicken
1 cup salsa
1 can (16 ounces) refried beans
1 cup shredded reduced-fat Mexican cheese blend</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary text-center" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="kayumanggi">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Kayumanggi - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">2 cups whole milk
2 tablespoons canned pumpkin
2 tablespoons sugar
2 tablespoons vanilla extract
1/2 teaspoon pumpkin pie spice
1/2 cup hot brewed espresso</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="paninindiganKita">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Paninindigan Kita - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">1/2 cup cornstarch
1-1/2 teaspoons baking powder
3/4 teaspoon salt
1/2 teaspoon Creole seasoning
1/4 teaspoon paprika
1/4 teaspoon cayenne pepper
1 cup all-purpose flour, divided
1/2 cup 2% milk
1/3 cup beer or nonalcoholic beer
2 cups crushed unsalted top saltines (about 40)
4 cod fillets (6 ounces each)
Oil for deep-fat frying</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="rideHome">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Ride Home - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">1/2-pound bulk pork sausage
1 medium onion, finely chopped
2 teaspoons chicken bouillon granules
1/2 teaspoon garlic powder
1/2 teaspoon pepper
2 medium red potatoes, cut into 1/2-inch cubes\
2 cups sliced fresh kale
3 cups 2% milk
1 cup heavy whipping cream
1 tablespoon cornstarch
1/4 cup cold water</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="paalam">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Paalam - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">4 large egg yolks
1/2 cup plus 6 teaspoons sugar, divided
2 cups heavy whipping cream
3 teaspoons vanilla extract</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="sabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Sabel - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">3 jalapeno peppers
1 medium onion, quartered
1 garlic clove, halved
2 cans (one 28 ounces, one 14-1/2 ounces) whole tomatoes, drained
4 fresh cilantro sprigs
1/2 teaspoon salt
Tortilla chips</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="miwy">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Make It with You - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">1/2-pound Italian turkey sausage links, casings removed, crumbled
1 small onion, chopped
1-1/2 teaspoons canola oil
1 garlic clove, minced
2 cups water
1 can (15-1/2 ounces) great northern beans, rinsed and drained
1 can (14-1/2 ounces) diced tomatoes, undrained
1 can (14-1/2 ounces) reduced-sodium chicken broth
3/4 cup uncooked elbow macaroni
1/4 teaspoon pepper
1 cup fresh spinach leaves, cut as desired
5 teaspoons shredded Parmesan cheese</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="doors">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Doors - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">1/2 cup dry bread crumbs
1/4 cup grated Parmesan cheese
2 teaspoons Italian seasoning
1 teaspoon salt
1-1/2 pounds boneless skinless chicken breast halves, cut into 1-inch cubes
1/2 cup butter, melted</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="lunod">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Lunod - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">1-pound ground beef
1/4 teaspoon salt
1 prebaked 12-inch thin pizza crust
1/2 cup Thousand Island salad dressing
1 small onion, chopped
2 cups shredded cheddar cheese
2 cups shredded lettuce
1/2 cup sliced dill pickles</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="leaves">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Leaves - Ingredients</h6>
        </div>
        <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">2 tablespoons butter, softened, divided
1 teaspoon minced fresh parsley
1/2 teaspoon minced garlic
1/4 teaspoon reduced-sodium soy sauce
1 beef flat iron steak or boneless top sirloin steak (3/4 pound)
1/8 teaspoon salt
1/8 teaspoon pepper</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- Footer -->
  <footer class="container-fluid py-5 mt-5 bg-light">
    <div class="row justify-content-center align-items-top">
      <div class="col-md-3">
      <h6 class="fw-bold my-4">Visit Us</h6>
        <div class="col">
        <a href="https://www.google.com/maps/place/Pamantasan+ng+Lungsod+ng+Maynila/@14.58679,120.9739887,17z/data=!3m1!4b1!4m6!3m5!1s0x3397ca2336770053:0x1b731714778d3506!8m2!3d14.58679!4d120.9761774!16zL20vMGZ4MnNy" target="_blank" class="text-decoration-none text-dark">
        <i class="bi bi-geo-alt-fill"></i>
        General Luna, corner Muralla St, Intramuros, Manila
        </a>
        </div>
      </div>
      <div class="col-md-3">
      <h6 class="fw-bold my-4">Follow</h6>
        <div class="col">
        <a href="https://www.facebook.com/jerksanjose0?mibextid=ZbWKwL" target="_blank" class="text-decoration-none text-dark">
        <i class="bi bi-facebook"></i>
        @BNBHub
        </a>
        </div>
        <div class="col">
        <a href="https://www.instagram.com/benandbenhub/?fbclid=IwAR1U4Mz8uq4CiZIpScbUWgQDbrbces9ugwuUYT7gD2TX29tZzkl6TztPVhA" target="_blank" class="text-decoration-none text-dark">
        <i class="bi bi-instagram"></i>
        @benandbenhub
        </a>
        </div>
        <div class="col">
        <a href="https://twitter.com/BenNBenHub?t=pq50hfv1QU_l6laQlpE5ew&s=09&fbclid=IwAR2_lsih2p9GYFmEvyoFmc4EzifH2cW1l9f2-Lz98avfSKw2vb0RpNv4S2Q"  target="_blank" class="text-decoration-none text-dark">
          <i class="bi bi-twitter"></i>
          @BenNBenHub
        </a>
        </div>
      </div>
      <div class="col-md-3">
      <h6 class="fw-bold my-4">Contact</h6>
          <div class="col">
          <a href="mailto:benandbenhub@gmail.com" class="text-decoration-none text-dark d-block m-0">
          <i class="bi bi-envelope-fill"></i>
          benandbenhub@gmail.com
          </a>
          </div>
          <div class="col">
          <a href="tel:84522245" class="text-decoration-none text-dark d-block m-0">
          <i class="bi bi-telephone-fill"></i>
          8452-2245
          </a>
          </div>
      </div>
      <div class="col-md-3">
      <h6 class="fw-bold my-4">Legal</h6>
          <div class="col">
          <a href="terms-and-conditions.php" target="_blank" class="text-decoration-none text-dark">Terms and Conditions</a>
      </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>