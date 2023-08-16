<?php
    $host ='localhost';
    $user = 'root';
    $password = 'Database_localhost_123';
    $dbName = 'project';

    $dsn = 'mysql:host='.$host.';dbname='.$dbName;
    $pdo = new PDO($dsn, $user, $password); 

?>