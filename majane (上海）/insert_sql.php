<html>
<head>
    <title>Challenge 3 -- Submit Form</title>
    <link rel="stylesheet" href="Source/Popup/avgrund.css">
    <link rel="stylesheet" href="Source/Popup/style.css">
    <script src="Source/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="Source/Popup/jquery.avgrund.js"></script>

</head>
<body>
<?php
include_once('Source/general_connection_sql.php');
$sql = new Sql('localhost','root','root');
if(key($_POST) == 'Supplier_Name'){
    $command = "INSERT INTO `suppliers` (`supplier_name`, `supplier_code`, `city`) VALUES (";
}
else{
    $command = "INSERT INTO `products` (`product_name`, `product_reference`, `supplier_code`) VALUES (";
}
foreach($_POST as $key => $value){
    $command .="'$value', ";
}
//if($_POST['Supplier_Name'] != ''){
//    $tablenom = array('Supplier_Name','Supplier_Code','City');
//    $tableajoute = array($_POST['Supplier_Name'],$_POST['Supplier_Code'],$_POST['City']);
//    $command = "INSERT INTO `suppliers` (`supplier_name`, `supplier_code`, `city`) VALUES (";
//}
//else{
//    $tablenom = array('Product_Name','Product_Reference','Supplier_Code');
//    $tableajoute = array($_POST['Product_Name'], $_POST['Product_Reference'],$_POST['Product_Supplier_Code']);
//    $command = "INSERT INTO `products` (`product_name`, `product_reference`, `supplier_code`) VALUES (";
//}
//
//foreach ($tableajoute as $value){
//    $command .="'$value', ";
//}
$command = substr($command,0,strlen($command)-2);
$command.=")";
$sql->connection("Challenge");
$result = $sql->execute($command);
if($result == true){
$success = '<ul>';
for($i=0;$i<=2;$i++){
    $success.='<li>'.array_keys($_POST)[$i].': '.array_values($_POST)[$i].'</li>';
}
$success .= '</ul>';
echo("<script>
        $(function() {
            $(document).avgrund({
                height: 150,
                openOnEvent: false,
                onUnload: function() {window.location.href='Animated Menu.php';},
                template: '$success' + '<p>Has been inserted successfully</p>'
            });
        });
    </script>");
}
else{
    echo("<script>
    $(function() {
        $(document).avgrund({
                height: 50,
                openOnEvent: false,
                onUnload: function() {window.location.href='Animated Menu.php';},
                template: '<p>There is an error in the insertion </p>'
            });
        });
    </script>");
}
$sql->close();
?>

</body>
</html>





