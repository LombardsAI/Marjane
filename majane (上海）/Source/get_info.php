
<?php
include_once('general_connection_sql.php');
include_once ('my_biblio_formulaire.php');
$sql = new Sql('localhost','root','root');

if(!array_key_exists('choice',$_GET)){
    if($_GET['type'] == "Supplier Name"){
        $command = 'SELECT DISTINCT supplier_name FROM `suppliers`';
    }
    else{
        $command = 'SELECT DISTINCT product_reference FROM `products`';
    }

    $sql->connection("Challenge");
    $result = $sql->execute($command);


    $liste = array();
    while ($row = mysqli_fetch_row($result)) {
        array_push($liste, $row[0]);
    }
    form_select('Data', 'Data', 'Data', '', 1, $liste, ' var choice  = $(this).val();  //获取选中的ID值
    var type = $("#Type_of_View").val();
    var xmlhttp;
    if (choice=="")
    {
        document.getElementById("result").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("result").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","Source/get_info.php?type="+type+"&choice="+choice,true);
    xmlhttp.send();');
}

else {
    if ($_GET['type'] == "Supplier Name") {
        $command = 'SELECT DISTINCT * FROM `suppliers` WHERE supplier_name =\'';
        $command .= "$_GET[choice]'";
    } else {
        $command = 'SELECT DISTINCT * FROM `products` WHERE product_reference =\'';
        $command .="$_GET[choice]'";
    }

    $sql->connection("Challenge");
    $result = $sql->execute($command);

    $row = mysqli_fetch_assoc($result);
    echo('<table class="table table-bordered table-striped"> <thead><tr>');
    foreach ($row as $key => $value){
        echo("<td scope='col'>$key</td>");
    }
    echo('</tr></thead>');
    $result = $sql->execute($command);

    while ($row = mysqli_fetch_assoc($result)) {
        echo("<tbody><tr>");
        foreach ($row as $key => $value) {
            echo("<td>$value</td>");
        }
        echo("</tr>");
    }
    echo('</tbody>');
}

$sql->close();




