<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Pobierz listę identyfikatorów produktów do usunięcia
  $ids = isset($_POST['ids']) ? explode(',', $_POST['ids']) : [];

  // Usuń produkty z bazy danych
  include_once './ProductsController.php';
  $productController = new ProductsController;
  foreach ($ids as $id) {
    $productController->deleteProduct($id);
  };
}