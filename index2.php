<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <!-- <link rel="manifest" href="http://localhost/site.webmanifest"> -->
    <link rel="mask-icon" href="http://localhost/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Products</title>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/components/carousel/"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- <script src="js/jquery.min.js.download"></script> -->
</head>

<body style="background-color: #26262d">

    <header>
        <nav class="navbar navbar-expand-lg fixed-top" style="color:#f0f0f0 !important;">

            <section class="yOpR1 wG6fJ" style="width:34%;color:#ffffff;">
                <form action="http://localhost/movies_/index.php" method="GET">
                    <input class="" type="text" id="search-movies" placeholder="Find movies" name="search-item"
                        required="" value="" style="width:100%">
                </form>
            </section>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active btn-signup">
                    <a class="nav-link" href="http://localhost/products/add-product"
                        style="color:black !important;text-transform: uppercase;">Add
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item btn-signin">
                    <a class="nav-link" href="http://localhost/movies_/#" style="text-transform: uppercase;">Mass
                        Delete</a>
                </li>
            </ul>

            </div>
        </nav>
    </header>

    <main role="main">
        <?php

                        include_once './ProductsController.php';
                        $productController = new ProductsController;
                        $products = $productController->getProducts();

        ?>
        <div class="container marketing" style="margin-top: 60px; margin-bottom: 20px">
            <div class="row" style="min-height: 300px;">
                <?php foreach($products as $key=>$product) {?>
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card">
                        <!-- <img class="card-img-top" src="images/movie_covers/murder in miami.PNG"> -->
                        <div class="card-block">
                            <h4 class="card-title"><?= $product['sku']?></h4>
                        </div>
                        <div class="card-footer">
                            <div id="mv-details-container">
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
                                    <?= $product['height'] ?>x<?= $product['width'] ?>x<?= $product['length'] ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>



    </main>
    <!-- FOOTER -->
    <footer class="container-fluid">
        <!-- <p class="float-right"><a href="http://localhost/movies_/#">Back to top</a></p>
        <p>© 2017-2018 Company, Inc. · <a href="http://localhost/movies_/#">Privacy</a> · <a
                href="http://localhost/movies_/#">Terms</a></p> -->
    </footer>

</body>

</html>