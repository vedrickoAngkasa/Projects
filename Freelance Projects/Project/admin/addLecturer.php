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
    <?php include('sidebar.php') ?>

    <main class="addDegreeContent">
        <div class="formAddDegree">
            <div class="headerText">
                <h1>ADD LECTURER</h1>
                <aside>_________________________</aside>
            </div>
            <form method="POST">
                <section>
                    <label>ID: </label>
                    <input type="text" name="ID">
                </section>

                <section>
                    <label>Lecturer ID: </label>
                    <input type="text" name="lecturerID">
                </section>

                <section>
                    <label>Faculty ID: </label>
                    <input type="text" name="facultyID">
                </section>

                <section>
                    <label>Lecturer Name: </label>
                    <input type="text" name="lecturerName">
                </section>

                <section>
                    <label>Faculty Name: </label>
                    <input type="text" name="facultyName">
                </section>

                <section>
                    <label>Experience Job: </label>
                    <input type="text" name="experienceJob">
                </section>

                <section>
                    <label>Image File: </label>
                    <input type="text" name="imageFile">
                </section>

                <section>
                    <label>Background: </label>
                    <textarea name="background"></textarea>
                </section>




                <section class="addButtons">
                    <input type="submit" name="addButtonInput" value="Add" class="addBtnInput">
                    <input type="submit" name="cancelButtonInput" value="Cancel" class="cancelBtnInput">
                </section>

                <?php

                if (isset($_POST["addButtonInput"])) {

                    $ID = $_POST['ID'];
                    $lecturerID = $_POST['lecturerID'];
                    $facultyID = $_POST['facultyID'];
                    $lecturerName = $_POST['lecturerName'];
                    $facultyName = $_POST['facultyName'];
                    $experienceJob = $_POST['experienceJob'];
                    $imageFile = $_POST['imageFile'];
                    $background = $_POST['background'];

                    include('dB.php');


                    $sql = 'INSERT INTO lecturer(ID, lecturerID, facultyID, lecturerName, facultyName,
                    experienceJob, imageFile, background)
                     VALUES(:ID, :lecturerID, :facultyID,:lecturerName,:facultyName, :experienceJob,
                     :imageFile, :background)';
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(['ID' => $ID, 'lecturerID' => $lecturerID,
                    'facultyID' => $facultyID, 'lecturerName' => $lecturerName, 'facultyName'=> $facultyName,
                    'experienceJob'=>$experienceJob, 'imageFile'=> $imageFile, "background"=> $background]);

                    if ($sql) {
                        echo '<script>alert("Successfully Added");</script>';
                        echo '<script>window.location.href = "lecturerAdmin.php"</script>';
                    } else {

                        echo '<script>console.log("not worked")</script>';
                    }
                } else {
                    echo '<script>console.log("not worked")</script>';
                }

                if (isset($_POST["cancelButtonInput"])) {

                    echo '<script>window.location.href = "lecturerAdmin.php"</script>';
                }

                ?>

            </form>

        </div>
    </main>



</body>

</html>