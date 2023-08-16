

<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University Website</title>
        <link rel="stylesheet"  href="css/login.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <?php include "./php/adminDb.php" ?>

<?php


   
if (isset($_POST['submit-Btn'])) {
        
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];  

        if($usernameInput == $Username && $passwordInput == $Password){
            session_start();
            $_SESSION['username'] = $Username;
            $_SESSION['password'] = $Password;
            echo '<script>window.location.href = "admin/degreeAdmin.php"</script>';
           

            

        } 
        if($usernameInput != $Username || $passwordInput != $Password){
            
            echo '<style type="text/css">
            .wrongInput {
                display: block;
            }
            </style>';
        }
        

}else{
    echo "<script>console.log(\"Not setted\")</script>";
}

   

?>
   
<body>
   
    <main>

        <div class="containerAdmin">

            <div class="formContainer">

                <div class="logoLogin">
                    <figure>
                        <img src="css/Images/logo.png">
                    </figure>
                </div>

            
                <form method="POST" id="formLogin" >
                    <h1>Login</h1>
                    <label>Username: </label>
                    <input class="username"type="text" value="" placeholder="Username" id="usernameText" name="username">
                    <label>Password: </label>
                    <input class="password"type="password" value="" placeholder="Password" id="passwordText" name="password">
                    <label class="wrongInput" >The Username or Password that has been entered is Incorrect</label>
                    <div class="submitBtn">
                        <button type="submit" name="submit-Btn">Login</button>
                    </div>
                </form>




            </div>



        </div>



    </main>


</body>
</html>