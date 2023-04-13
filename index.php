<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Products List</title>
</head>

<body>
    <?php

            include_once './ProductsController.php';

            if(isset($_POST['delete_products'])) {
                $product_ids = $_POST['product_id'];
                $productController = new ProductsController;
                foreach ($product_ids as $product_id) {
                    $productController->deleteProduct($product_id);
                }
            }

            $productController = new ProductsController;
            $products = $productController->getProducts();

            ?>
    <form method="POST">
        <div class="containeer">
            <header>
                <h1>Product List</h1>
                <ul class="menu-items">
                    <li class="menu-item"><a href="add-product.php">add</a></li>
                    <li><button id="delete-product-btn" type="submit" name="delete_products">mass delete</button></li>
                </ul>
            </header>
            <main>


                <?php foreach($products as $key=>$product) {?>
                <div class="card">
                    <input type="checkbox" name="product_id[]" class="delete-checkbox" value="<?= $product['id'] ?>" />
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
            <footer>
                <h5>
                    © copyright by
                    <a href='https://business-card-pan-be.netlify.app/' target="blank">pan.be</a>
                    <script>
                    document.write(new Date().getFullYear())
                    </script>
                </h5>
            </footer>
        </div>
    </form>

</body>

</html>