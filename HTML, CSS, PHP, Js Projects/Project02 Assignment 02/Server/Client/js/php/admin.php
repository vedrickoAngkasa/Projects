<?php

$servername = "localhost";
$username = "X34331539";
$password = "X34331539";
$dbname = "X34331539";

$adminInput = $_POST['adminSearch'];
$adminInfo = array();
$dbc = mysqli_connect($servername, $username, $password, $dbname);

$query = "SELECT * FROM USER WHERE NAME = '$adminInput'";
$result = mysqli_query($dbc, $query);

while($row=$result->fetch_object()) {


    array_push($adminInfo,$row->USERNAME, $row->PASSWORD,$row->NAME,$row->ADDRESS,$row->PHONENUMBER,$row->EMAILADDRESS);
    }

echo json_encode($adminInfo);

mysqli_close($dbc);








?>