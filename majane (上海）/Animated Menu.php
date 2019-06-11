<html xmlns:float="http://www.w3.org/1999/xhtml">
<head>
    <title>Challenge 2 -- Animated Menu </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Source/Popup/avgrund.css">
    <link rel="stylesheet" href="Source/Popup/style.css">
    <script src="Source/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="Source/bootstrap.css">
    <link rel="stylesheet" href="Source/myCSS.css">
    <script src="Source/pourAJAX.js"></script>

<!--    <script type="text/javascript" src="Source/Popup/jquery.avgrund.js"></script>-->
    <?php
    include_once ('Source/form_action.php');
    ?>

</head>
<body>
    <div class="container">
        <h1>Welcome to the animated menu</h1>
        <div class="buttons">
            <a id="view" class="button">VIEW OLD</a>
            <a id="show" class="button left" onclick="changeWhat()">ADD NEW</a>
            <div class="what" hidden>
                <a class='add' id="new_supplier" onclick="hideWhat()">Add New Supplier</a>
                <a class='add' id="new_product" onclick="hideWhat()">Add New Product</a>
            </div>

         </div>
    </div>

    <div class="container">
    <?php
    echoFormSupplier();
    echoFormProduct();
    echoFormView();
    ?>

    <br>
    <div id="txtHint">Further action will be presented here ...</div>
    <div id="result" hidden>Results will be presented here ...</div>
    </div>
</body>
</html>