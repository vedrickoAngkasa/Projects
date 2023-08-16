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
        <h1>ADD FACULTY</h1>
        <aside>_________________________</aside>
    </div>
        <form method="POST">

            <section>
                <label>Faculty ID: </label>
                <input type="text" name="facultyID">
            </section>

            <section>
                <label>Faculty Name: </label>
                <input type="text" name="facultyName">
            </section>

           


            <section class="addButtons">
                <input type="submit" name="addButtonInput" value="Add" class="addBtnInput">
                <input type="submit" name="cancelButtonInput" value="Cancel" class="cancelBtnInput">
            </section>
            
            <?php

                if(isset($_POST["addButtonInput"])){
                    
                    $facultyID = $_POST['facultyID'];
                    $facultyName = $_POST['facultyName'];

                    include('dB.php');
                    

                    $sql = 'INSERT INTO faculty(facultyID, facultyName)
                     VALUES(:facultyID, :facultyName)';
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(['facultyID' => $facultyID, 'facultyName' => $facultyName]);

                    if($sql)
                    {
                        echo '<script>alert("Successfully Added");</script>';
                        echo '<script>window.location.href = "facultiesAdmin.php"</script>';
                    }else{

                        echo '<script>console.log("not worked")</script>';
                    }


                }else{
                    echo '<script>console.log("not worked")</script>';
                }
                
                if(isset($_POST["cancelButtonInput"])){
                    echo '<script>window.location.href = "facultiesAdmin.php"</script>';
                }

            ?>
            
        </form>

    </div>
</main>



</body>
</html>