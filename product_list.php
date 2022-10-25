<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/Stylesheet/product-list.css">
    <title>Product List</title>
</head>
<body>
    <header>
        <h1>Product List</h1>
        <ul class="add-delete-button">
            <li class="add-product-button-wrapper"><button id="add-product-btn" name="add" onclick="location.href = 'product_add.php';">ADD</button></li>
            <li class="delete-product-button-wrapper"><button id="delete-product-btn" name="mass-delete">MASS DELETE</button></li>
        </ul>
    </header>
    <section class="content">
        <?php
        require __DIR__ . '/vendor/autoload.php';
        use Backend\Backend\Database\Controller\Controller;
        $test = new Controller();
        $janis = $test->getData();
        ?>
    </section>
    <footer><h3>Scandiweb Test assignment</h3>
    </footer>
</body>
</html>