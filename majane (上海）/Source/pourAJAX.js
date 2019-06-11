$(function() {
    $("#new_supplier").click(function(){
        $(".Supplier").show();
        $(".Product").hide();
        $(".View").hide();
    });
    $("#new_product").click(function(){
        $(".Product").show();
        $(".Supplier").hide();
        $(".View").hide();
    });
    $("#view").click(function(){
        $(".Product").hide();
        $(".Supplier").hide();
        $(".View").show();
    });
    $("#Type_of_View").change(function() {
        var type  = $(this).val();  //获取选中的ID值
        $("#result").show();
        var xmlhttp;
        if (type=="")
        {
            document.getElementById("txtHint").innerHTML="";
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
                document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","Source/get_info.php?type="+type,true);
        xmlhttp.send();

    });


});

function showWhat(){
    $(".what").show();
}
function hideWhat(){
    $(".what").hide();
}

function changeWhat(){
    $(".what").toggle();
}
// function presenteResult(){
//     var choice  = $(this).val();  //获取选中的ID值
//     alert(choice);
//     var type = $("#Type_of_View").val();
//     var xmlhttp;
//     if (choice=="")
//     {
//         document.getElementById("result").innerHTML="";
//         return;
//     }
//     if (window.XMLHttpRequest)
//     {
//         // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
//         xmlhttp=new XMLHttpRequest();
//     }
//     else
//     {
//         // IE6, IE5 浏览器执行代码
//         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange=function()
//     {
//         if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
//         {
//             document.getElementById("result").innerHTML=xmlhttp.responseText;
//         }
//     }
//     xmlhttp.open("GET","Source/get_info.php?type="+type+"&choice="+choice,true);
//     xmlhttp.send();
// }
