<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>
    <link rel="stylesheet" href="../css/degreeAdmin.css">
    <?php include('header.php') ?>
</head>

<body>
    <?php include('sidebar.php') ?>
    <main class="adminMain">

        <div class="headerAdmin">
            <div class="headerText">
                <h1>FACULTIES</h1>
                <aside>_________________________</aside>
            </div>


            <button type="submit" class="add-Btn" id="addFacultiesBtn">+ ADD
            </button>


        </div>


        <div class="degreeAdminContent">

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Facutly ID</th>
                        <th scope="col">Faculty Name</th>
                    </tr>
                </thead>


                <?php


                include('dB.php');

                $sql = 'SELECT * FROM faculty';
                $sth = $pdo->prepare($sql);
                $sth->execute();
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {



                ?>


                    <tbody>
                        <tr>
                            <td><?= $row["facultyID"] ?></td>
                            <td><?= $row["facultyName"] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update<?= $row['facultyID'] ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $row['facultyID'] ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>

                        <!--Update Modal -->
                        <div class="modal fade" id="update<?= $row['facultyID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">UPDATE FACULTY</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">

                                            <div class="updateForm">

                                                <section>
                                                    <label>Faculty ID: </label>
                                                    <input type="text" name="degreeIDUpt" value="<?= $row['facultyID'] ?>">
                                                </section>

                                                <section>
                                                    <label>Faculty Name: </label>
                                                    <input type="text" name="degreeNameUpt" value="<?= $row['facultyName'] ?>">
                                                </section>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="btnUpdate">Save changes</button>
                                                </div>


                                            </div>

                                        </form>

                                        <?php
                                        if (isset($_POST['btnUpdate'])) {
                                            $facultyID =  $_POST['degreeIDUpt'];
                                            $facultyName = $_POST['degreeNameUpt'];


                                            $sql = 'UPDATE faculty SET facultyID = :facultyID, facultyName = :facultyName
                                                        WHERE facultyID = :facultyID';
                                            $stmt = $pdo->prepare($sql);
                                            $stmt->execute([
                                                'facultyID' => $facultyID, 'facultyName' => $facultyName, 'facultyID' => $facultyID
                                            ]);

                                            if ($sql) {
                                                echo '<script>alert("Successfully Update");</script>';
                                                echo '<script>window.location.href = "facultiesAdmin.php"</script>';
                                            } else {

                                                echo '<script>console.log("not worked")</script>';
                                            }
                                        }

                                        ?>



                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Delete Modal -->
                        <div class="modal fade" id="delete<?= $row['facultyID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">DELETE FACULTY</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">

                                            <div class="deleteForm">
                                            <section class="warningLogo"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> </section>
                                                <section class="warningText">WARNING!!!</section>

                                                <label class="warningContent">Are you sure you want to delete this item ?</label>
                                                <input type="text" class="deleteInput" name="facultyIDDelete" value="<?= $row['facultyID'] ?>">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="btnDelete">Yes</button>
                                            </div>
                                        </form>

                                        <?php
                                            if(isset($_POST['btnDelete'])){

                                                $facultyID_Delete = $_POST['facultyIDDelete'];
                                                $sql =  'DELETE FROM faculty WHERE facultyID = :facultyID';
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute(['facultyID' => $facultyID_Delete]);
        
        
                                                if ($sql) {
                                                    echo '<script>alert("Successfully Deleted");</script>';
                                                    echo '<script>window.location.href = "facultiesAdmin.php"</script>';
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