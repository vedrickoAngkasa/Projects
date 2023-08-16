<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('header.php'); ?>
</head>
<body class="addDegreeBody">
    <?php include('sidebar.php')?>

<main class="addDegreeContent">
    <div class="formAddDegree">
    <div class="headerText">
        <h1>ADD TESTIMONIALS</h1>
        <aside>_________________________</aside>
    </div>
        <form method="POST">
        <section>
                        <label>ID: </label>
                        <input type="text" name="ID" >
                    </section>

                    <section>
                        <label>Student ID: </label>
                        <input type="text" name="studentID" >
                    </section>

                    <section>
                        <label>Degree ID: </label>
                        <input type="text" name="degreeID" >
                    </section>

                    <section>
                        <label>Student Name: </label>
                        <input type="text" name="studentName">
                    </section>

                    <section>
                        <label>Degree: </label>
                        <input type="text" name="degree">
                    </section>     
                    
                    <section>
                        <label>Description Degree: </label>
                        <textarea name="descriptionDegree" ></textarea>
                    </section>

                    <section>              
                        <label>Image File: </label>
                        <input type="text" name="imageFile" >
                    </section>

                    <section>            
                        <label>Rating: </label>
                        <input type="text" name="rating" >
                    </section>






                <section class="addButtons">
                    <input type="submit" name="addButtonInput" value="Add" class="addBtnInput">
                    <input type="submit" name="cancelButtonInput" value="Cancel" class="cancelBtnInput">
                </section>

            <?php

                if(isset($_POST["addButtonInput"])){
                    
                    $ID = $_POST['ID'];
                    $studentID = $_POST['studentID'];
                    $degreeID = $_POST['degreeID'];
                    $studentName = $_POST['studentName'];
                    $degree = $_POST['degree'];
                    $descriptionDegree = $_POST['descriptionDegree'];
                    $imageFile = $_POST['imageFile'];
                    $rating = $_POST['rating']; 

                    $host ='localhost';
                    $user = 'root';
                    $password = 'Database_localhost_123';
                    $dbName = 'project';
                
                    $dsn = 'mysql:host='.$host.';dbname='.$dbName;
                    $pdo = new PDO($dsn, $user, $password); 
                    

                    $sql = 'INSERT INTO student(ID, studentID, degreeID, studentName, degree,
                    descriptionDegree, imageFile, rating)
                     VALUES(:ID, :studentID, :degreeID,:studentName,:degree, :descriptionDegree,
                     :imageFile, :rating)';
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(['ID' => $ID, 'studentID' => $studentID,
                    'degreeID' => $degreeID, 'studentName' => $studentName, 'degree'=> $degree,
                    'descriptionDegree'=>$descriptionDegree, 'imageFile'=> $imageFile, "rating"=> $rating]);

                    if($sql)
                    {
                        echo '<script>alert("Successfully Added");</script>';
                        echo '<script>window.location.href = "testimonialsAdmin.php"</script>';
                    }else{

                        echo '<script>console.log("not worked")</script>';
                    }


                }else{
                    echo '<script>console.log("not worked")</script>';
                }
                
                if(isset($_POST["cancelButtonInput"])){

                    echo '<script>window.location.href = "testimonialsAdmin.php"</script>';
                }

            ?>
            
        </form>

    </div>
</main>



</body>
</html>