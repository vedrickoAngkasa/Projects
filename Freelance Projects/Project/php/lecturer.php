<?php

    $host ='localhost';
    $user = 'root';
    $password = 'Database_localhost_123';
    $dbName = 'project';

    $dsn = 'mysql:host='.$host.';dbname='.$dbName;
    $pdo = new PDO($dsn, $user, $password); 

    $statement = $pdo->query('SELECT * FROM lecturer');

    $json = array(

        'profilePic',
        'lecturerName',
        'facultyName',
        'experienceJob',
        'background'
    );

 
    $profilePic = array();

    while($row = $statement->fetch(PDO::FETCH_OBJ)){

       $img = "css/Images/";
       $img .= $row->imageFile;

       array_push($json, $img ,$row->lecturerName,$row->facultyName,$row->experienceJob,$row->background);
        
    }

    echo json_encode($json);
 
   
?>