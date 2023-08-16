<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>
    <?php include('header.php') ?>
</head>

<body>
    <?php include('sidebar.php') ?>
    <main class="adminMain">

        <div class="headerAdmin">
            <div class="headerText">
                <h1>DEGREE</h1>
                <aside>_________________________</aside>
            </div>

            <button type="submit" class="add-Btn" id="addDegreeBtn">+ ADD
            </button>


        </div>

        <div class="degreeAdminContent">

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Degree ID</th>
                        <th scope="col">Degree Name</th>
                        <th scope="col">Faculty ID</th>
                        <th scope="col">Academic Term</th>
                        <th scope="col">Overview</th>
                        <th scope="col">Lecturer Name</th>
                        <th scope="col">Email Lecturer</th>
                        <th scope="col">Learning Outcome</th>
                        <th scope="col">Assessments</th>
                        <th scope="col">Assessments Description</th>
                    </tr>
                </thead>


                <?php


                include('dB.php');

                $sql = 'SELECT * FROM degree';
                $sth = $pdo->prepare($sql);
                $sth->execute();
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {



                ?>


                    <tbody>
                        <tr>
                            <td><?= $row['degreeID'] ?></td>
                            <td><?= $row["degreeName"] ?></td>
                            <td><?= $row["facultyID"] ?></td>
                            <td><?= $row["academicTerm"] ?></td>
                            <td><?= $row["overview"] ?></td>
                            <td><?= $row["lecturerName"] ?></td>
                            <td><?= $row["emailLecturer"] ?></td>
                            <td><?= $row["learningOutcome"] ?></td>
                            <td><?= $row["assessments"] ?></td>
                            <td><?= $row["assessmentDesc"] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update<?= $row['degreeID'] ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $row['degreeID'] ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>

                        <!--Update Modal -->
                        <div class="modal fade" id="update<?= $row['degreeID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">UPDATE DEGREE</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">

                                            <div class="updateForm">

                                                <section>
                                                    <label>Degree ID: </label>
                                                    <input type="text" name="degreeIDUpt" value="<?= $row['degreeID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Degree Name: </label>
                                                    <input type="text" name="degreeNameUpt" value="<?= $row['degreeName'] ?>">
                                                </section>

                                                <section>
                                                    <label>Faculty ID: </label>
                                                    <input type="text" name="facultyIDUpt" value="<?= $row['facultyID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Academic Term: </label>
                                                    <input type="text" name="academicTermUpt" value="<?= $row['academicTerm'] ?>">
                                                </section>

                                                <section>
                                                    <label>Overview: </label>
                                                    <input type="text" name="overviewUpt" value="<?= $row['overview'] ?>">
                                                </section>

                                                <section>
                                                    <label>Lecturer Name: </label>
                                                    <input type="text" name="lecturerNameUpt" value="<?= $row["lecturerName"] ?>">
                                                </section>

                                                <section>
                                                    <label>Email Lecturer: </label>
                                                    <input type="text" name="emailLecturerUpt" value="<?= $row['emailLecturer'] ?>">
                                                </section>

                                                <section>
                                                    <label>learningOutcome: </label>
                                                    <input type="text" name="learningOutcomeUpt" value="<?= $row['learningOutcome'] ?>">
                                                </section>

                                                <section>
                                                    <label>Assessments: </label>
                                                    <input type="text" name="AssessmentsUpt" value="<?= $row['assessments'] ?>">
                                                </section>

                                                <section>
                                                    <label>Assessments Description: </label>
                                                    <textarea name="assessmentDescUpt"><?= $row["assessmentDesc"] ?></textarea>
                                                </section>



                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="btnUpdate" class="btn btn-primary">Save changes</button>
                                                </div>



                                            </div>


                                        </form>

                                    </div>



                                    <?php

                                    if (isset($_POST['btnUpdate'])) {
                                        $degreeID = $_POST['degreeIDUpt'];
                                        $degreeName = $_POST['degreeNameUpt'];
                                        $facultyID = $_POST['facultyIDUpt'];
                                        $academicTerm = $_POST['academicTermUpt'];
                                        $overview = $_POST['overviewUpt'];
                                        $lecturerName = $_POST['lecturerNameUpt'];
                                        $emailLecturer = $_POST['emailLecturerUpt'];
                                        $learningOutcome = $_POST['learningOutcomeUpt'];
                                        $assessments = $_POST['AssessmentsUpt'];
                                        $assessmentDesc = $_POST['assessmentDescUpt'];


                                        $sql = 'UPDATE degree SET degreeName = :degreeName, facultyID = :facultyID,
                                        academicTerm = :academicTerm, overview = :overview, lecturerName = :lecturerName ,
                                        emailLecturer = :emailLecturer, learningOutcome = :learningOutcome, assessments = :assessments, assessmentDesc = :assessmentDesc
                                        WHERE degreeID = :degreeID';
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute([
                                            'degreeName' => $degreeName,
                                            'facultyID' => $facultyID, 'academicTerm' => $academicTerm, 'overview' => $overview,
                                            'lecturerName' => $lecturerName, 'emailLecturer' => $emailLecturer, "learningOutcome" => $learningOutcome,
                                            'assessments' => $assessments, 'assessmentDesc' => $assessmentDesc, 'degreeID' => $degreeID
                                        ]);

                                        if ($sql) {
                                            echo '<script>alert("Successfully Update");</script>';
                                            echo '<script>window.location.href = "degreeAdmin.php"</script>';
                                        } else {

                                            echo '<script>console.log("not worked")</script>';
                                        }
                                    }




                                    ?>
                                </div>
                            </div>
                        </div>

                        <!--Delete Modal -->
                        <div class="modal fade" id="delete<?= $row['degreeID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">DELETE DEGREE</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">

                                            <div class="deleteForm">

                                                <section class="warningLogo"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> </section>
                                                <section class="warningText">WARNING!!!</section>

                                                <label class="warningContent">Are you sure you want to delete this item ?</label>
                                                <input type="text" class="deleteInput" name="degreeIDDelete" value="<?= $row['degreeID'] ?>">

                                            </div>



                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary" name="btnDelete">Yes</button>
                                    </div>

                                    </form>

                                    <?php

                                    if (isset($_POST['btnDelete'])) {
                                        $degreeIDDelete = $_POST['degreeIDDelete'];
                                        $sql =  'DELETE FROM degree WHERE degreeID = :degreeID';
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute(['degreeID' => $degreeIDDelete]);


                                        if ($sql) {
                                            echo '<script>alert("Successfully Deleted");</script>';
                                            echo '<script>window.location.href = "degreeAdmin.php"</script>';
                                        } else {

                                            echo '<script>console.log("not worked")</script>';
                                        }
                                    }


                                    ?>


                                </div>

                            </div>
                        </div>
        </div>

    <?php } ?>

    </table>











    </div>




    </main>
</body>

</html>