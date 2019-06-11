
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once ('Source/form_action.php');
?>
<html>
<head>
    <link href="Source/bootstrap.css" rel="stylesheet" type="text/css"/>
    <title>Challenge 1 -- Web Page </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Source/jquery-3.3.1.js"></script>
     <script>
        $(function() {
            $(".Supplier").show();
        });
    </script>
</head>
<body>
<div class='panel panel-warning'>
    <div class='panel-heading' id="title">Supplier Form</div>
    <div class='panel-body'>
        <div class="cartebg">
        <div>

            <?php
            echoFormSupplier();
            ?>

        </div>
        </div>
    </div>
</div>
</body>
</html>



<?php
