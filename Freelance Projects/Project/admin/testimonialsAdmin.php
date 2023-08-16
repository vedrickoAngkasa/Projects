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
                <h1>TESTIMONIALS</h1>
                <aside>_________________________</aside>
            </div>

            <button type="submit" class="add-Btn" id="addTestimonialsBtn">+ ADD
            </button>



        </div>

        <div class="degreeAdminContent">

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Degree ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Description Degree</th>
                        <th scope="col">Image File</th>
                        <th scope="col">Rating</th>
                    </tr>
                </thead>


                <?php


                include('dB.php');

                $sql = 'SELECT * FROM student';
                $sth = $pdo->prepare($sql);
                $sth->execute();
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {



                ?>


                    <tbody>
                        <tr>
                            <td><?= $row['ID'] ?></td>
                            <td><?= $row["studentID"] ?></td>
                            <td><?= $row["degreeID"] ?></td>
                            <td><?= $row["studentName"] ?></td>
                            <td><?= $row["degree"] ?></td>
                            <td><?= $row["descriptionDegree"] ?></td>
                            <td><?= $row["imageFile"] ?></td>
                            <td><?= $row["rating"] ?></td>

                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update<?= $row['studentID'] ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $row['studentID'] ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>

                        <!--Update Modal -->
                        <div class="modal fade" id="update<?= $row['studentID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <label>Student ID: </label>
                                                    <input type="text" name="studentIDUpt" value="<?= $row['studentID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Degree ID: </label>
                                                    <input type="text" name="degreeIDUpt" value="<?= $row['degreeID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Student Name: </label>
                                                    <input type="text" name="studentNameUpt" value="<?= $row['studentName'] ?>">
                                                </section>

                                                <section>
                                                    <label>Degree: </label>
                                                    <input type="text" name="degreeUpt" value="<?= $row['degree'] ?>">
                                                </section>

                                                <section>
                                                    <label>Degree Description: </label>
                                                    <textarea name="descriptionDegreeUpt"><?= $row["descriptionDegree"] ?></textarea>
                                                </section>

                                                <section>
                                                    <label>Image File: </label>
                                                    <input type="text" name="imageFileUpt" value="<?= $row['imageFile'] ?>">
                                                </section>

                                                <section>
                                                    <label>Rating: </label>
                                                    <input type="text" name="ratingUpt" value="<?= $row['rating'] ?> " >
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
                                        $studentID = $_POST['studentIDUpt'];
                                        $degreeID = $_POST['degreeIDUpt'];
                                        $studentName = $_POST['studentNameUpt'];
                                        $degree = $_POST['degreeUpt'];
                                        $descriptionDegree = $_POST['descriptionDegreeUpt'];
                                        $imageFile = $_POST['imageFileUpt'];
                                        $rating = $_POST['ratingUpt'];



                                        $sql = 'UPDATE student SET 
                            ID = :ID, studentID = :studentID, degreeID = :degreeID, studentName = :studentName, 
                            degree = :degree, descriptionDegree = :descriptionDegree, imageFile = :imageFile, rating = :rating
                            WHERE studentID = :studentID';
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute([
                                            'ID' => $ID, 'studentID' => $studentID,
                                            'degreeID' => $degreeID, 'studentName' => $studentName, 'degree' => $degree,
                                            'descriptionDegree' => $descriptionDegree, 'imageFile' => $imageFile, 'rating' => $rating, 'studentID' => $studentID
                                        ]);

                                        if ($sql) {
                                            echo '<script>alert("Successfully Update");</script>';
                                            echo '<script>window.location.href = "testimonialsAdmin.php"</script>';
                                        } else {

                                            echo '<script>console.log("not worked")</script>';
                                        }
                                    }




                                    ?>
                                </div>
                            </div>
                        </div>

                        <!--Delete Modal -->
                        <div class="modal fade" id="delete<?= $row['studentID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input type="text" class="deleteInput" name="studentIDDelete" value="<?= $row['studentID'] ?>">




                                            </div>



                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary" name="btnDelete">Yes</button>
                                    </div>

                                    </form>

                                    <?php

                                    if (isset($_POST['btnDelete'])) {
                                        $studentIDDelete = $_POST['studentIDDelete'];
                                        $sql =  'DELETE FROM student WHERE studentID = :studentID';
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute(['studentID' => $studentIDDelete]);


                                        if ($sql) {
                                            echo '<script>alert("Successfully Deleted");</script>';
                                            echo '<script>window.location.href = "testimonialsAdmin.php"</script>';
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






    </main>
</body>

</html>