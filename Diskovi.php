<?php
    session_start();
    include 'classes/dbh.classes.php';
    try{
        $username = "root";
        $password ="";
        $pdo = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    $stmt = $pdo->prepare('SELECT * FROM products WHERE type="Storage" LIMIT 1');
    $stmt->execute();
    $disk = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
  <div class="header">

    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #FFA500;">
      <div class="container">
        <a class="navbar-brand" href="home.php"><img src="Ref/PCLogo.png" width="90px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><img
                  src="ref/grafickalogo.png" width="40px" height="40px"></a>
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


  </div>

  <br>
  <br>
  <br>
  


  <div class="container">
        <h3>Storage</h3>
        <div class="row g-3">
        <?php foreach ($disk as $products): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                <a href="product.php?page=product&id=<?=$products['id']?>">
                    <img src="Ref/<?=$products['img']?>" alt="ph" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?=$products['title']?></h5></a>
                        <p class="card-text"><?=$products['price']?>$</p>
                        <a href="" class="btn">Order now</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

  <br>
  <br>
  <br>


  <!-- Footer -->
  <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>

</html>