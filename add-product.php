<?php

    if(($_SERVER['REQUEST_METHOD']=='POST'))
        {
            include_once "ProductsController.php";

            $productsController = new ProductsController();
            $productsController->addProduct();
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="./css/style.css" rel="stylesheet" type="text/css">

    <style>
    .page-link {
        background-color: unset !important;
        padding: 6px 12px 6px 12px !important;
        color: white;
        border: none;
    }

    .page-item {
        padding-bottom: 4px;
    }
    </style>


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="padding-left:0px;padding-right:0px;">
                <div id="main-container">

                    <div id="main-panel">

                        <div class="row">
                            <div class="col-sm-12">
                                <div id="add-movie-header">
                                    <!-- <h4>Add Movie</h4> -->
                                </div>
                                <div id="add-movie-form-container">
                                    <form class="form-horizontal" method="post" id="product_form"
                                        action='add-product.php' autocomplete="off" enctype="multipart/form-data" />
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <h4 class="pull-left">Product Add</h4>
                                            <a href="index.php" class="btn pull-right"
                                                style="margin-left: 5px;">Cancel</a>
                                            <button type="submit" class="btn pull-right">Save</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="sku">SKU:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="sku" placeholder="" name="sku"
                                                value="" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="name">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" placeholder="" name="name"
                                                value="" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="price">Price ($):</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="price" placeholder=""
                                                name="price" value="" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Type switcher:</label>
                                        <div class="col-sm-10">
                                            <select data-placeholder="Select Type" class="form-control genre"
                                                name="productType" id="productType">
                                                <option value="">Select Type</option>
                                                <option value="1">DVD</option>
                                                <option value="2">Book</option>
                                                <option value="3">Furniture</option>

                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="size">Size (MB):</label>
                                        <div class="col-sm-10">
                                            <input type="size" class="form-control form-field" id="size" placeholder=""
                                                name="size" value="" required>
                                            <span>Please, enter the size of the video in
                                                megabytes.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="weight">Weight (KG):</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control form-field" id="weight"
                                                placeholder="" name="weight" value="" required>
                                            <span>Please, provie the weight of the book in kilograms.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="height">Height (CM):</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control form-field" id="height"
                                                placeholder="" name="height" value="" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="width">Width (CM):</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control form-field" id="width"
                                                placeholder="" name="width" value="" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="length">Length (CM):</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control form-field" id="length"
                                                placeholder="" name="length" value="" required>
                                            <span>Please, provide dimentions in HxWxL format</span>
                                        </div>
                                    </div>


                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="./js/productTypeHandling.js">
    </script>

</body>

</html>