<?php

$servername = "localhost";
$username = "X34331539";
$password = "X34331539";
$dbname = "X34331539";

$dbc = mysqli_connect($servername, $username, $password, $dbname);

$query = "SELECT * FROM PRODUCT";

$result = mysqli_query($dbc, $query);

$data = array();

while($row=$result->fetch_object()) {

    $img = "http://ceto.murdoch.edu.au/~34315379/Assignment2/Server/Client/css/images/product/";
   $img .= $row->ProductImage;
    array_push($data,$row->ProductName, $row->Description,$row->Price,$img);
    }

echo json_encode($data);

mysqli_close($dbc);

?>


