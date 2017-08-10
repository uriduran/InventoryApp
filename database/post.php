<?php

require 'Connection.php';

var_dump($_REQUEST);



$category = (int)$_REQUEST['Category'];
$gNumber = (int)$_REQUEST['GNumber'];
$pNumber = $_REQUEST['PNumber'];
$vendor = $_REQUEST['Vendor'];
$price = (float)$_REQUEST['Price'];
$description = $_REQUEST['Description'];
$location = $_REQUEST['Location'];
$inStock = (int)$_REQUEST['InStock'];
$capacity = (int)$_REQUEST['Capacity'];


$sql = "INSERT INTO InvRegistry (Category,GNumber,PNumber)
          VALUES ('$category', '$gNumber', '$pNumber')";
$conn->query($sql);


//for test
print($category."-".$gNumber);

header("Location: ../index.php");
