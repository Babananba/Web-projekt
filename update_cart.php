<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  $productId = $_POST['id'];
  $quantity = $_POST['quantity'];

  // Povezivanje s bazom podataka
  $username = "root";
  $password = "";
  $db = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);

  // Provjera postojanja proizvoda
  $stmt = $db->prepare("SELECT * FROM products WHERE id = :id");
  $stmt->execute(['id' => $productId]);
  $product = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($product) {
    if (isset($_SESSION['cart'][$productId])) {
      $_SESSION['cart'][$productId]['quantity'] = $quantity;
      $totalPrice = 0;
      foreach ($_SESSION['cart'] as $product) {
        $totalPrice += $product['price'] * $product['quantity'];
      }
      echo json_encode(array(
        'message' => 'Količina proizvoda je ažurirana.',
        'cart' => $_SESSION['cart'],
        'totalPrice' => $totalPrice
      ));
    } else {
      echo json_encode(array(
        'message' => 'Proizvod ne postoji u košarici.'
      ));
    }
  } else {
    echo json_encode(array(
      'message' => 'Proizvod ne postoji.'
    ));
  }
}
?>
