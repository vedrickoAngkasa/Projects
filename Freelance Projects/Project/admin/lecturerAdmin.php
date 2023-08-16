<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>

    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php include('header.php'); ?>
</head>

<body>
    <?php include('sidebar.php') ?>
    <main class="adminMain">

        <div class="headerAdmin">
            <div class="headerText">
                <h1>LECTURER</h1>
                <aside>_________________________</aside>
            </div>

            <button type="submit" class="add-Btn" id="addLecturerBtn">+ ADD
            </button>


        </div>
        <div class="degreeAdminContent">

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Lecturer ID</th>
                        <th scope="col">Faculty ID</th>
                        <th scope="col">Lecturer Name</th>
                        <th scope="col">Faculty Name</th>
                        <th scope="col">Experience Job</th>
                        <th scope="col">Image File</th>
                        <th scope="col">Background</th>
                    </tr>
                </thead>


                <?php


                include('dB.php');

                $sql = 'SELECT * FROM lecturer';
                $sth = $pdo->prepare($sql);
                $sth->execute();
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {



                ?>


                    <tbody>
                        <tr>
                            <td><?= $row['ID'] ?></td>
                            <td><?= $row["lecturerID"] ?></td>
                            <td><?= $row["facultyID"] ?></td>
                            <td><?= $row["lecturerName"] ?></td>
                            <td><?= $row["facultyName"] ?></td>
                            <td><?= $row["experienceJob"] ?></td>
                            <td><?= $row["imageFile"] ?></td>
                            <td><?= $row["background"] ?></td>

                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update<?= $row['lecturerID'] ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $row['lecturerID'] ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>

                        <!--Update Modal -->
                        <div class="modal fade" id="update<?= $row['lecturerID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <label>ID: </label>
                                                    <input type="text" name="IDUpt" value="<?= $row['ID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Lecturer ID: </label>
                                                    <input type="text" name="lecturerIDUpt" value="<?= $row['lecturerID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Faculty ID: </label>
                                                    <input type="text" name="facultyIDUpt" value="<?= $row['facultyID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Lecturer Name: </label>
                                                    <input type="text" name="lecturerNameUpt" value="<?= $row['lecturerName'] ?>">
                                                </section>

                                                <section>
                                                    <label>Faculty Name: </label>
                                                    <input type="text" name="facultyNameUpt" value="<?= $row['facultyName'] ?>">
                                                </section>

                                                <section>
                                                    <label>Experience Job: </label>
                                                    <input type="text" name="experienceJobUpt" value="<?= $row["experienceJob"] ?>">
                                                </section>

                                                <section>
                                                    <label>Image File: </label>
                                                    <input type="text" name="imageFileUpt" value="<?= $row['imageFile'] ?>">
                                                </section>

                                                <section>
                                                    <label>Background: </label>
                                                    <textarea name="backgroundUpt"><?= $row['background'] ?></textarea>
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
                                        $ID = $_POST['IDUpt'];
                                        $lecturerID = $_POST['lecturerIDUpt'];
                                        $facultyID = $_POST['facultyIDUpt'];
                                        $lecturerName = $_POST['lecturerNameUpt'];
                                        $facultyName = $_POST['facultyNameUpt'];
                                        $experienceJob = $_POST['experienceJobUpt'];
                                        $imageFile = $_POST['imageFileUpt'];
                                        $background = $_POST['backgroundUpt'];



                                        $sql = 'UPDATE lecturer SET 
                                        ID = :ID, lecturerID = :lecturerID, facultyID = :facultyID, lecturerName = :lecturerName, 
                                        facultyName = :facultyName, experienceJob = :experienceJob, imageFile = :imageFile, background = :background
                                        WHERE lecturerID = :lecturerID';
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute([
                                            'ID' => $ID, 'lecturerID' => $lecturerID, 'facultyID' => $facultyID,
                                            'lecturerName' => $lecturerName, 'facultyName' => $facultyName, 'experienceJob' => $experienceJob,
                                            'imageFile' => $imageFile, 'background' => $background, 'lecturerID' => $lecturerID
                                        ]);

                                        if ($sql) {
                                            echo '<script>alert("Successfully Update");</script>';
                                            echo '<script>window.location.href = "lecturerAdmin.php"</script>';
                                        } else {

                                            echo '<script>console.log("not worked")</script>';
                                        }
                                    }




                                    ?>
                                </div>
                            </div>
                        </div>

                        <!--Delete Modal -->
                        <div class="modal fade" id="delete<?= $row['lecturerID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input type="text" class="deleteInput" name="lecturerIDDelete" value="<?= $row['lecturerID'] ?>">




                                            </div>



                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary" name="btnDelete">Yes</button>
                                    </div>

                                    </form>

                                    <?php

                                    if (isset($_POST['btnDelete'])) {
                                        $lecturerIDDelete = $_POST['lecturerIDDelete'];
                                        $sql =  'DELETE FROM lecturer WHERE lecturerID = :lecturerID';
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute(['lecturerID' => $lecturerIDDelete]);


                                        if ($sql) {
                                            echo '<script>alert("Successfully Deleted");</script>';
                                            echo '<script>window.location.href = "lecturerAdmin.php"</script>';
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