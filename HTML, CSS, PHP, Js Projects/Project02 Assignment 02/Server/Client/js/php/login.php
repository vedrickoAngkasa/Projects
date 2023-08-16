<?php

$servername = "localhost";
$username = "X34331539";
$password = "X34331539";
$dbname = "X34331539";

$connection = mysqli_connect($servername, $username, $password, $dbname);

?>


<?php
	session_start();
?>

<?php
if(isset($_POST['submit'])){

    $name = $_POST['loginName'];
    $passwordLogin = $_POST['loginPassword'] ;
	
    $username = mysqli_real_escape_string($connection,$name);
    $password = mysqli_real_escape_string($connection,$passwordLogin);
	
    $query = "SELECT * FROM USER WHERE USERNAME = '{$username}' ";
   
    $select_user_query = mysqli_query($connection,$query);

    if(!$select_user_query){
      
      die("QUERY FAILED". mysqli_error($connection));
	
    }
     
    while($row = mysqli_fetch_array($select_user_query)){

	$db_name = $row["USERNAME"];
	$db_password = $row["PASSWORD"];

   }
	
  if($username !== $db_name && $passwordLogin !== $db_password){
    
    header("Location: ../../Home.php");


  }else if($username == $db_name && $passwordLogin == $db_password){


  $_SESSION['username'] = $db_name;
  $_SESSION['password'] = $db_password;

    
	header("Location: ../../Home.php");

     
   
 }
   
}


?>




