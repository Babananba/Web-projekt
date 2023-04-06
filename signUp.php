<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hardware Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css" class="">
  <script src="https://kit.fontawesome.com/d7256736fd.js" crossorigin="anonymous"></script>

</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #FFA500;">
    <div class="container">
      <a class="navbar-brand" href="home.php"><img src="Ref/PCLogo.png" width="90px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><img src="ref/grafickalogo.png" width="40px" height="40px"></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Procesori.php">Processors</a></li>
              <li><a class="dropdown-item" href="VideoCards.php">Video Cards</a></li>
              <li><a class="dropdown-item" href="Maticne.php">Motherborads</a></li>
              <li><a class="dropdown-item" href="Kucista.php">Cases</a></li>
              <li><a class="dropdown-item" href="Napajanja.php">Power Supplies</a></li>
              <li><a class="dropdown-item" href="RAM.php">RAM</a></li>
              <li><a class="dropdown-item" href="Diskovi.php">Storage</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signUp.php"><img src="ref/sighup.png" width="40px" height="40px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><img src="Ref/cart.png" width="40px" height="40px"></a>
          </li>
          <li class="nav nav-item"></li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button" style="background-color: #454545;">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="d-flex justify-content-center ">
    <div class="signup">
      <h1 style="margin-top: 20px">Welcome!</h1>

      <form action="includes/signup.inc.php" method="post">
        <div class="form-group row">
          <label for="name" class="col-md-6 col-form-label">Name: </label>
          <div class="col-md-6 col-md-offset-10">
            <input type="text" name="name" placeholder="Name">
          </div>
        </div>

        <div class="form-group row">
          <label for="lname" class="col-md-6 col-form-label">Surname: </label>
          <div class="col-md-6 col-md-offset-10">
            <input type="text" name="lname" placeholder="Surname">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-md-6 col-form-label">Email: </label>
          <div class="col-md-6 col-md-offset-10">
            <input type="text" name="email" placeholder="Email">
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-md-6 col-form-label">Password: </label>
          <div class="col-md-6 col-md-offset-10">
            <input type="password" name="pwd" placeholder="Password">
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-md-6 col-form-label">Password repeat: </label>
          <div class="col-md-6 col-md-offset-10">
            <input type="password" name="pwdRepeat" placeholder="Password repeat">
          </div>
        </div>

        <button type="submit" name="submit" style="margin-bottom: 20px">Sign up</button>
        <p>Already have an account? <a href="logIn.php">Log in</a></p>
      </form>
    </div>
  </div>


  <footer class="text-center text-lg-start bg-white text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>

      <div>
        <a href="https://www.facebook.com/" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/Babananba1" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.google.com/" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="https://www.instagram.com/peetekaboo/" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/Babananba" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Hardware Store
            </h6>
            <p>
              The best money can buy.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              About our store
            </h6>
            <p>
              <a href="" class="text-reset">Offices</a>
            </p>
            <p>
              <a href="" class="text-reset">Contacts and information</a>
            </p>
            <p>
              <a href="" class="text-reset">Who are we?</a>
            </p>
            <p>
              <a href="" class="text-reset">Work and career</a>
            </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              CUSTOMER SERVICE
            </h6>
            <p>
              <a href="#!" class="text-reset">Help Center</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Track an Order</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Return Policy</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Osijek, Croatia</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              petar.radonic1912@gmail.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
          </div>
        </div>
      </div>
    </section>
  </footer>
</body>

</html>