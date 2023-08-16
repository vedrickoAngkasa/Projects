

<?php

$servername = "localhost";
$username = "X34331539";
$password = "X34331539";
$dbname = "X34331539";

$dbc = mysqli_connect($servername, $username, $password, $dbname);

$query = "SELECT * FROM USER";

$result = mysqli_query($dbc, $query);

$data = array();

while($row=$result->fetch_object()) {


    array_push($data,$row->USERNAME, $row->PASSWORD,$row->NAME,$row->ADDRESS,$row->PHONENUMBER,$row->EMAILADDRESS);
    }

echo json_encode($data);

mysqli_close($dbc);

?>


