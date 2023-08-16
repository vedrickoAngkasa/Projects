<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('header.php') ?>
    
</head>
<body class="addDegreeBody">
    <?php include('sidebar.php')?>

<main class="addDegreeContent">
    <div class="formAddDegree">
    <div class="headerText">
        <h1>ADD DEGREE</h1>
        <aside>_________________________</aside>
    </div>
        <form method="POST">

            <section>
                <label>Degree ID: </label>
                <input type="text" name="degreeID">
            </section>

            <section>
                <label>Degree Name: </label>
                <input type="text" name="degreeName">
            </section>

            <section>
                <label>Faculty ID: </label>
                <input type="text" name="facultyID">
            </section>

            <section>
                <label>Academic Term: </label>
                <input type="text" name="academicTerm">
            </section>

            <section>
                <label>Overview: </label>
                <input type="text" name="overview">
            </section>     
               
            <section>
                <label>Lecturer Name: </label>
                <input type="text" name="lecturerName">
            </section>

            <section>              
                <label>Email Lecturer: </label>
                <input type="text" name="emailLecturer">
            </section>

            <section>            
                <label>learningOutcome: </label>
                <input type="text" name="learningOutcome">
            </section>

            <section>
                <label>Assessments: </label>
                <input type="text" name="Assessments">
            </section>

            <section>
                <label>Assessments Description: </label>
                <textarea name="assessmentDesc"></textarea>
            </section>


            <section class="addButtons">
                <input type="submit" name="addButtonInput" value="Add" class="addBtnInput">
                <input type="submit" name="cancelButtonInput" value="Cancel" class="cancelBtnInput">
            </section>
            
            <?php

                if(isset($_POST["addButtonInput"])){
                    
                    $degreeID = $_POST['degreeID'];
                    $degreeName = $_POST['degreeName'];
                    $facultyID = $_POST['facultyID'];
                    $academicTerm = $_POST['academicTerm'];
                    $overview = $_POST['overview'];
                    $lecturerName = $_POST['lecturerName'];
                    $emailLecturer = $_POST['emailLecturer'];
                    $learningOutcome = $_POST['learningOutcome']; 
                    $assessments = $_POST['Assessments'];
                    $assessmentDesc = $_POST['assessmentDesc'];

                    include('dB.php');
                    

                    $sql = 'INSERT INTO degree(degreeID, degreeName, facultyID, academicTerm, overview,
                    lecturerName, emailLecturer, learningOutcome, assessments, assessmentDesc)
                     VALUES(:degreeID, :degreeName, :facultyID,:academicTerm,:overview, :lecturerName,
                     :emailLecturer, :learningOutcome,:assessments, :assessmentDesc)';
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(['degreeID' => $degreeID, 'degreeName' => $degreeName,
                    'facultyID' => $facultyID, 'academicTerm' => $academicTerm, 'overview'=> $overview,
                    'lecturerName'=>$lecturerName, 'emailLecturer'=> $emailLecturer, "learningOutcome"=> $learningOutcome,
                    'assessments'=> $assessments, 'assessmentDesc' => $assessmentDesc]);

                    if($sql)
                    {
                        echo '<script>alert("Successfully Added");</script>';
                        echo '<script>window.location.href = "degreeAdmin.php"</script>';
                        
                        
                    }else{

                        echo '<script>console.log("not worked")</script>';
                    }


                }else{
                    echo '<script>console.log("not worked")</script>';
                }
                
                if(isset($_POST["cancelButtonInput"])){

                    echo '<script>window.location.href = "degreeAdmin.php"</script>';
                }

            ?>
            
        </form>

    </div>
</main>



</body>
</html>