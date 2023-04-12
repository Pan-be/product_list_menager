<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Products List</title>
</head>

<body>
    <div class="containeer">
        <header>
            <h1>Product List</h1>
            <ul class="menu-items">
                <li class="menu-item"><a href="add-product.php">add</a></li>
                <li><button id="mass-delete-btn">mass delete</button></li>
            </ul>
        </header>
        <main>
            <?php

                        include_once './ProductsController.php';
                        $productController = new ProductsController;
                        $products = $productController->getProducts();

         foreach($products as $key=>$product) {?>

            <div class="card">
                <input type="checkbox" class="checkbox" />
                <div class="properties">
                    <h4 class="card-title"><?= $product['sku']?></h4>


                    <div id="details-container">
                        <div><?= $product['name'] ?></div>
                        <div><?= $product['price'] ?> $</div>
                        <?php if (!empty($product['size'])): ?>
                        <div class="properties">Size: <?= $product['size'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($product['weight'])): ?>
                        <div class="properties">Weight: <?= $product['weight'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($product['height']) && !empty($product['width']) && !empty($product['length'])): ?>
                        <div class="properties">Dimension:
                            <div><?= $product['height'] ?>x<?= $product['width'] ?>x<?= $product['length'] ?></div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <?php } ?>
        </main>
        <footer></footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/deletingProducts.js"></script>

</body>

</html>