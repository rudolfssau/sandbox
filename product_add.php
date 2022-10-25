<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/Stylesheet/product-list.css">
    <title>Product Add</title>
</head>
<body>
<header>
    <h1>Product Add</h1>
    <ul class="add-delete-button">
        <li class="add-product-button-wrapper"><button name="save_add" value="submit" type="submit" form="product_form" id="add-product-btn" form="product_form">Save</button></li>
        <li class="delete-product-button-wrapper"><button id="delete-product-btn" name="mass-delete" onclick="location.href = 'product_list.php'">Cancel</button></li>
    </ul>
</header>
<section class="content">
    <form name="product_form" id="product_form" action="" method="post">
        <div><p>SKU</p><input id="product_sku" type="text" name="sku"></div>
        <div><p>Name</p><input id="product_name" type="text" name="name"></div>
        <div><p>Price ($)</p><input id="product_price" type="text" name="price"></div>
        <section>
            <label for="type-switcher" id="type-switcher">Type Switcher</label>
            <select name="switcher" id="productType" class="required">
                <option value="" name="one" id="one"></option>
                <option value="dvd" name="dvd" class="required">DVD</option>
                <option value="furniture" class="required">Furniture</option>
                <option value="book" class="required">Book</option>
            </select>
        </section>
        <section>
            <div id="dvd">
                <div id="dvd_input_field"><p>Size (MB)</p><input id="dvd_input" type="text" name="sizemb"></div>
                <h3>Please provide disc space in MB.</h3>
            </div>
            <div id="furniture">
                <div id="furniture_input_field_0"><p>Height (CM)</p><input type="text" id="furniture_height" name="heightcm"></div>
                <div id="furniture_input_field_1"><p>Width (CM)</p><input type="text" id="furniture_width" name="widthcm"></div>
                <div id="furniture_input_field_2"><p>Length (CM)</p><input type="text" id="furniture_length" name="lengthcm"></div>
                <h3>Please provide the height, width and length of the furniture piece in centimeters.</h3>
            </div>
            <div id="book">
                <div id="book_input_field"><p>Weight (KG)</p><input type="text" id="book_weight" name="weightkg"></div>
                <h3>Please provide the weight of the book in KG.</h3>
            </div>
        </section>
    </form>
</section>
<footer><h3>Scandiweb Test assignment</h3></footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="Public/Functionality/dropdown.js"></script>
<script src="Public/Functionality/validation.js"></script>
</html>