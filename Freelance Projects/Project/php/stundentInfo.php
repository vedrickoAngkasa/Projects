<?php

    $host ='localhost';
    $user = 'root';
    $password = 'Database_localhost_123';
    $dbName = 'project';

    $dsn = 'mysql:host='.$host.';dbname='.$dbName;
    $pdo = new PDO($dsn, $user, $password); 

    $statement = $pdo->query('SELECT * FROM student');

    $json = array(

        'profilePic',
        'studentName',
        'degree',
        'rating',
        'descriptionDegree'
    );

 
    $profilePic = array();

    while($row = $statement->fetch(PDO::FETCH_OBJ)){

       $img = "css/Images/";
       $img .= $row->imageFile;

       array_push($json, $img ,$row->studentName,$row->degree,$row->rating,$row->descriptionDegree);
        
    }

    echo json_encode($json);
 
   
?>