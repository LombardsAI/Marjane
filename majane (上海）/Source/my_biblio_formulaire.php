<?php

function form_begin($class,$method,$action){
    echo("\n<!-- =============================== -->\n");
    echo("<!-- form_begin : ($class $method $action) -->\n");
    
    printf("<form class='%s' method='%s' action='%s' hidden>\n", $class, $method, $action);
}

function form_input_text($label, $name, $size, $value, $required){
    echo("\n<!-- form_input_text : $label $name $size $value $required-->\n");
    echo(" <p>\n");
    echo("<div class='form-group'>");
    echo(" <label for'$label'>$label</label>");
        echo(" <input type='text' class='form-control' $required name=$name size=$size value=$value>");
    echo("</div>");
}

function form_select($label, $name, $id, $multiple, $size, $liste, $onchange){
    echo("<div class='form-group'>
           <label for='$label'>$label</label>");
    if($multiple == "multiple"){
        $array = "[]";
    }
    else{
        $array="";
    }
    echo("<select $multiple class='form-control' id=$id name=$name$array onchange='$onchange' size=$size >");
    echo("<option></option>");
    foreach ($liste as $value){
        echo("<option>$value</option>");
        }
    echo("</select>");
}

function form_input_reset($value){
    echo("<button class='btn btn-primary' type='reset' >$value</button>");
}

function form_input_submit($value){
    echo("<button class='btn btn-primary' type='submit' >$value</button>");
}

function form_end(){
    echo("</form>");
}
