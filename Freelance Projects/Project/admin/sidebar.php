<div class="navbarContainer">
    <nav class="navbar">


        <div class="headerLogo" id="adminLogoHeader">
            <figure>
                <img src="../css/Images/footerLogo.png">
            </figure>
        </div>

        <ul class="navbar-nav">
            <li><a href="degreeAdmin.php">DEGREE</a></li>
            <li><a href="facultiesAdmin.php">FACULTIES</a></li>
            <li><a href="lecturerAdmin.php">LECTURER</a></li>
            <li><a href="testimonialsAdmin.php">TESTIMONIALS</a></li>

        </ul>

        <ul class="navbar-logout">
            <li>
                <form method="POST">
                    <button type="submit" id="logoutButton-sidebar" name="logoutBtn">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Log Out
                    </button>
                </form>
            </li>
        </ul>

        <?php
            if(isset($_POST['logoutBtn'])){
                session_destroy();
                echo '<script>window.location.href = "../login.php"</script>';
            }

        ?>

    </nav>

</div>