<?php

    $host ='localhost';
    $user = 'root';
    $password = 'Database_localhost_123';
    $dbName = 'project';

    $dsn = 'mysql:host='.$host.';dbname='.$dbName;
    $pdo = new PDO($dsn, $user, $password); 

    $sql = 'SELECT * FROM degree';
    $sth = $pdo->prepare($sql);
    $sth->execute();

/* Fetch all of the remaining rows in the result set */
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);   
   
?>