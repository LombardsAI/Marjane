<?php
include_once('my_biblio_formulaire.php');

function echoFormSupplier()
{
    form_begin('Supplier', 'post', 'insert_sql.php');
    form_input_text('Supplier Name', 'Supplier_Name', '50', '', 'required');
    form_input_text('Supplier Code', 'Supplier_Code', '50', '', '');
    form_input_text('City', 'City', '50', '', '');
    form_input_submit('Submit');
    form_end();
}

function echoFormProduct()
{
    form_begin('Product', 'post', 'insert_sql.php');
    form_input_text('Product Name', 'Product_Name', '50', '', '');
    form_input_text('Product Reference', 'Product_Reference', '50', '', 'required');
    form_input_text('Supplier Code', 'Product_Supplier_Code', '50', '', '');
    form_input_submit('Submit');
    form_end();
}

function echoFormView()
{
    form_begin('View','post','');
    $liste = array("Supplier Name","Product Reference");
    form_select('Type of view','Type_of_View','Type_of_View','',1,$liste,'');
    form_end();
}
