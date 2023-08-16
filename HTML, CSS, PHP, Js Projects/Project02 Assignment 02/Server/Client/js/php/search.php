
<?php

$servername = "localhost";
$username = "X34331539";
$password = "X34331539";
$dbname = "X34331539";

$dbc = mysqli_connect($servername, $username, $password, $dbname);
          
		
			
			if(isset($_POST['searchSubmit'])){
				$search = $_POST['search']; 
				$searchArray = array();

				$query = "SELECT * FROM PRODUCT WHERE ProductName LIKE '%$search%'";
			
				$search_query = mysqli_query($dbc, $query);
				
				if(!$search_query){
					die("QUERY FAILED".mysqli_error($dbc));
					
				}
			
				
			
	

		
				
			}
		
			


?>





<?php include "login.php"; ?>
<?php  session_start(); ?>
<?php

if(isset($_SESSION['username'])){
	
	if($_SESSION['username'] == 'user1'){
   		
		
		 $role = "u1";
	

	}else if( $_SESSION['username'] == 'user2' ){

        $role = "u2";

    }else if($_SESSION['username'] == 'user3' ){

        $role = "u3";

    }


    if($_SESSION['username'] == 'staff1'){
   		
		
        $role = "s1";
   

   }else if( $_SESSION['username'] == 'staff2' ){

       $role = "s2";

   }else if($_SESSION['username'] == 'staff3' ){

       $role = "s3";

   }


     }
  
  



?>

    
<script type="text/javascript">var role = "<?= $role ?>";</script>
<script type="text/javascript" src="js/Home.js"></script>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Assignment 2</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/Home.css" />
    <link rel="stylesheet" type="text/css" href="../../css/Product.css" />
    <link rel="stylesheet" type="text/css" href="../../css/AboutUs.css" />
    <link rel="stylesheet" type="text/css" href="../../css/login.css" />
    <link rel="stylesheet" type="text/css" href="../../css/logout.css" />
    <link rel="stylesheet" type="text/css" href="../../css/Cart.css" />
    <script src="../search.js"></script>

</head>
<body>

        <header>

            <div class="headerContent ">
                

   



                <div class="headerLogo">
                    <img src="../../css/images/logo.png">
       		<div class = "search">	
			<form class="formSearch" action="search.php" method="POST" onsubmit = "validateSearch()">
			<input type = "text" class= "searchText" id="inputSearch" value="" name="search" placeholder="Type to Search...">
			 <button type = "submit" id="search" name="searchSubmit"class="searchSubmit"><i class="fas fa-search"></i></button>
			</form>
		</div>
                </div>
    
                <div class="headerMenu">
                    <nav>
                                    

                        <ul>
                            <li id="menu1"><a href="#Home"  class="navlinks menu menu-active">HOME</a></li>
                            <li  id="menu2"><a href="#Product" class="navlinks menu menu-active">PRODUCT</a></li>
                            <li id="menu3"><a href="#AboutUs" class="navlinks menu menu-active">ABOUT US</a></li>
                       
                            <li  id="menu4" c><a href="#login" class="navlinks menu menu-active" >Sign In</a></li>
                            <li id="menu6" class="logout"><a href="#loginOut" class="navlinks menu menu-active" ><?php echo $_SESSION['username']; ?></a></li>
                         
                            <li  id="menu5"><a href="#Cart" class="navlinks menu menu-active"><i class="fas fa-shopping-cart"></i></a></li>
   
                        </ul>




                    </nav>

                </div>
            


		<div class = "search">	
			<form class="formSearch" action="search.php" method="POST"  onsubmit = "validateSearch()">
			<input type = "text" class= "searchText" id="inputSearch" value="" name="search" placeholder="Type to Search...">
			 <button type = "submit"  name="searchSubmit"class="searchSubmit"><i class="fas fa-search"></i></button>

			</form>
		</div>



            </div>
  

    
        </header>

		<div class="page p1" id="page1">
			 <main class="homeMain ">

            


                <div class="mainContent">
            


                    
    
                    <div class="title2">
                        <span class="Title2Text">Result Search</span>
                        <br/>
                        <span class="underlineTitle">
                         _________ 
                        </span>
                    </div>
			
		

			
                    <div class="ContainerAll">  
			<?php
					while($row=$search_query->fetch_object()) {

    					$img = "http://ceto.murdoch.edu.au/~34315379/Assignment2/Server/Client/css/images/product/";
   					$img .= $row->ProductImage;
    					$name = $row->ProductName;
					$description =  $row->Description;
					$price = $row->Price;
					$searchImg = $img;

					
   				 
				?>
			<div class="card__container">
                        <div class="card__top__section">
                            <img src="<?php echo $searchImg ?>">
                            <div class="card__top__section__icons">
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart7" onclick="addtoCart();">
                                    </div>
                
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p><?php echo $name ?></p>
                            <span><?php echo $description ?></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span ><?php echo $price ?></span>
                       </div>
                        </div>
                        </div>
                    </div>


			


		<?php
			}
		?>
		
				
            
                    </div>
            
                                      
                    </div>
            
                  
    
                <div class="iconsMade">Icons made by <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    
    
        </main>
        

        <footer>


            <div class="footerContent">
                
                <div class="footerDescription">
                    <img src="../../css/images/logo.png">
                    <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                        to purchase toys. They offer different ranges of products such as 
                        but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                        <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                        <br>
                        <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                </div>
        
                <div class="footerMap">
                    <h1>Find Us</h1>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                     width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                </div>
        
        
        
        
            </div>
        
            <div class="footerBottom">
                <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
            </div>
        
        
        
        </footer>
            
    </div>
    
    
 		


		<div class="page p2" id="page2">

            <main class="productMain">
                           
                <div class="title1">
                    <span class="Title1Text">CATEGORIES</span>
                    <br/>
                    <span class="underlineTitle">
                     _________ 
                    </span>
                </div>
        
        
                <div class="category">
  
                 
            <section class="category1">
             <li  id="menu9"><a href="#Category1" class="navlinks menu menu-active">                 
            <img  src="../../css/images/toy2.png" >                
			<span>CAR TOYS</span></a> </li>
            </section>    
   

            <section class="category1">
             <li  id="menu10"><a href="#Category2" class="navlinks menu menu-active">                 
             <img  src="../../css/images/railroad.png" >             
			<span>TRACK SET</span></a> </li>
            </section> 

            <section class="category1">
             <li  id="menu11"><a href="#Category3" class="navlinks menu menu-active">                 
             <img  src="../../css/images/building.png" >              
			<span>LEGO SETS</span></a> </li>
            </section> 

        
                </div>
        
         
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img7">
                            <div class="card__top__section__icons">
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart7" onclick="addtoCart();">
                                    </div>
                
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName7"></p>
                            <span id="productDesc7"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price7"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img8">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart8" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName8"></p>
                            <span id="productDesc8"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price8"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img9">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart9" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName9"></p>
                            <span id="productDesc9"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price9"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img10">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart10" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName10"></p>
                            <span id="productDesc10"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price10"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img11">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart11" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName11"></p>
                            <span id="productDesc11"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price11"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img12">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart12" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName12"></p>
                            <span id="productDesc12"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price12"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img13">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart13" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName13"></p>
                            <span id="productDesc13"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price13"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img14">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart14" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName14"></p>
                            <span id="productDesc14"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price14"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img15">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart15" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName15"></p>
                            <span id="productDesc15"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price15"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img16">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart16" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName16"></p>
                            <span id="productDesc16"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price16"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img17">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart17" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName17"></p>
                            <span id="productDesc17"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price17"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img18">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart18" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName18"></p>
                            <span id="productDesc18"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price18"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img19">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart19" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName19"></p>
                            <span id="productDesc19"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price19"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                           <img src="" id="img20">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart20" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName20"></p>
                            <span id="productDesc20"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price20"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img21">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart21" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName21"></p>
                            <span id="productDesc21"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price21"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                       <div class="card__container">
                        <div class="card__top__section">
                           <img src="" id="img22">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart22" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName22"></p>
                            <span id="productDesc22"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price22"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img23">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "23" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName23"></p>
                            <span id="productDesc23"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price23"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img24">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart24" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName24"></p>
                            <span id="productDesc24"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price24"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img25">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart25" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName25"></p>
                            <span id="productDesc25"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price25"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img26">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart26" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName26"></p>
                            <span id="productDesc26"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price26"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img27">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart27" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName27"></p>
                            <span id="productDesc27"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price27"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img28">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart28" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName28"></p>
                            <span id="productDesc28"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price28"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img29">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart29" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName29"></p>
                            <span id="productDesc29"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price29"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img30">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart30" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName30"></p>
                            <span id="productDesc30"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price30"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img31">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart31" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName31"></p>
                            <span id="productDesc31"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price31"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img32">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart32" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName32"></p>
                            <span id="productDesc32"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price32"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img33">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart33" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName33"></p>
                            <span id="productDesc33"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price33"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
                
                <div class="ContainerAll">  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img34">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart34" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName34"></p>
                            <span id="productDesc34"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price34"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img35">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart35" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName35"></p>
                            <span id="productDesc35"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="far fa-star rating-with-color"></i>
                         <span>4 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price35"></span>
                       </div>
                        </div>
                        </div>
                    </div>
                  
                  
                    <div class="card__container">
                        <div class="card__top__section">
                            <img src="" id="img36">
                            <div class="card__top__section__icons">
            
     
                                    <div>
                                       <input type="button" value="Cart" id = "Cart36" onclick="addtoCart();">
                                    </div>
                
            
                            </div>
                        </div>
                        <div class="card__body__section">
                            <p id="productName36"></p>
                            <span id="productDesc36"></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span id="price36"></span>
                       </div>
                        </div>
                        </div>
                    </div>
        
           
                  
                </div>
        
        
        
        
            </main>
            <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
            </footer>
                

		</div>

		<div class="page p3" id="page3">
			
            <main class="productMain">


                <div class="desc1">
        
                    <section class="descriptionContent1">
                        <h1>About Us</h1>
                        <p>Toys O'Clock is an international toy retailer company founded in June 2020 with it headquarter located in Medan, North Sumatra, Indonesia.
                            They offer a wide range of products from the world-renowned manufactures specialise 
                            in toys which is Hot Wheels, Lego, etc at an affordable price.
                            Born in the middle of the COVID-19 pandemic, Toys O'Clock know that nowadays the strategic to spread your market 
                            widely in a significant amount of time is through the internet. So, Toys O'Clock collaborate with Acosta Group and Dwijaya Toys on their Ecommerce market.\
                             These will help them as a newcomer in the toys industry to compete with their competitor. 
                            Toys O'Clock have a slogan of 'Bringing magical joy and happiness to your doorstep'. 
                            This means buying their product will lead to great pleasure for the customers..</p>
                    </section>
        
                    <section class="descriptionContent2">
                        <iframe width="640" height="420" 
                        src="https://www.youtube.com/embed/JinuOQTUSNY?start=3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                         gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </section>
        
                </div>
        
        
                <div class="desc2">
        
                    <section class="descriptionContent3">
                        <h1>Our Goal</h1>
                        <p>Toys O'Clock not only prioritize products that are currently being sold, but they also pay 
                            attention to the authenticity of the product and safety of the product when it gets to the destination. 
                            They will use bubble wrapped and plastic to ensure the products get to the destination without any harm.
                            Toys O'Clock products have been approved by INS (Indonesian National Standard). Furthermore, they also review their product prices,
                            so it will fit the SOP (Standard Operating Procedure) of the INS.
                            Toys O'Clock have a mission to become one of the best toys' manufacture in the world. In order to pursuing that goal, 
                            they know the best approach is to not only prioritize their products, but also respect and consider every review as well as suggestion 
                            from their customers. When a customer leaves a review, they will check for it then try to apply the changes. 
                            For the sake in increasing Toys O'clock follower rapidly, they often do giveaways on their Instagram account. 
                            Then, special promos or discount is also given for special occasions such as Chinese New Year, Christmas, Halloween, and much more. Occasionally, 
                            they will have a special event for a product which is being sold for a limited time on the best seller section of their websites' home page.</p>
                    </section>
        
                    <section class="descriptionContent4">
                        <iframe width="640" height="450" 
                        src="https://www.youtube.com/embed/W2O-Bis09MA?start=154" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                        gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </section>
        
                </div>
        
        
                <div class="instruction">
        
        
                    <div class="instructionContainer">
                        <h1>HOW TO USE OUR WEBSITE</h1>
                        <span>
                            _____________________________
                        </span>
                        
                        <div class="Number1">
        
                            <section class="logoNumber1">
                                <img src="../../css/images/one.png">
                            </section>
        
                            <section class="descriptionNumber1">
                                <p>
                                    First of all, if you want to enjoy our applications features to the fullest.
                                    You must first log in to an account so that all features will be available for you to use. 
                                    If not, then the full features of the application will be limited. 
                                    The location of the login page is on the top right of the page with the icon 
                                    <i class="fas fa-user" ></i>
                                </p>
                            </section>
        
                        </div>
        
                        <div class="Number2">
        
                            <section class="logoNumber2">
                                <img src="../../css/images/two.png">
                            </section>
        
                            <section class="descriptionNumber2">
                                <p>
                                    Secondly, after logging in, you can browse the website as your heart desires. 
                                    There are search bar functionality where it can search the product inside the website located 
                                    in the top right side of the website with the icon <i class="fas fa-search"></i>. 
                                    Furthermore, we have a search filter located on the Product page above the product card, 
                                    where it will filter the page based on the filter options. 
                                </p>
                            </section>
        
                        </div>
        
                        <div class="Number3">
        
                            <section class="logoNumber3">
                                <img src="../../css/images/three.png">
                            </section>
        
                            <section class="descriptionNumber3">
                                <p>
                                    Lastly, the navigation functionality is located at the 
                                    top of the page and in the footer as well; click the link, 
                                    and it will redirect you to the desired page. To add to this, 
                                    we also have a category navigation bar where it will redirect 
                                    you to the page based on the category you clicked on. 
                                    This feature is on the HOME page.
                                </p>
                            </section>
        
                        </div>
                    
                    </div>
        
        
                </div>
        
                <div class="iconsMade">Icons made by <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        
        
        
        
            </main>

            <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
            </footer>
                
		</div>

        <div class="page p4" id="page4">
			<main class="loginMain">

                <div class="formContent" >
                    <h1>LOGIN</h1>
                   <form method= "POST" action="login.php">
                        <input type="text" placeholder="Enter email or username" name="loginName" value="" id="nameLogin" >
                        <input type="password" placeholder="Enter Password" name="loginPassword" value="" id="passwordLogin">    
                        <input type="submit" class="submitbtn" value="Submit" name="submit">
            	   </form>
                   

            </main>   
            
            <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
            </footer>     
		</div>

        <div class="page p5" id="page5">
            <main class="cartMain">


                <div class="cartContainer">
        
        
                    <div class="cartData" id="cartInfo">
                            
        
        
                    </div>
        
        
                    <div class="cartOrder">
        
                        <h1>Your Order</h1>
        
                        <form>
                            <label>Item : </label>
                            <div></div>
        
                            <label>Number of Item : </label>
                            <div></div>
        
        
                        </form>
        
        
                    </div>
        
        
                </div>
        
        
        
        
            </main>
            <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
            </footer>
                
		</div>	

        <div class="page p6" id="page6">

        <main class="logoutMain">
        <h1>Account</h1>
        <span class="underline">_____________</span>

    <div class="logoutContent">    
        

        <form class="accountInfo">
            
            <h1>Account Information</h1>

            <section>
                <label>Username : </label>
                <span id="accountData1"></span>
            </section>

            <section>
                <label>Password : </label>
                <span id="accountData2"></span>
            </section>

            <section>
                <label>Name : </label>
                <span id="accountData3"></span>
            </section>

            <section>
                <label>Address : </label>
                <span id="accountData4"></span>
            </section>

            <section>
                <label>Phone Number : </label>
                <span id="accountData5"></span>
            </section>

            <section>
                <label>Email Address : </label>
                <span id="accountData6"></span>
            </section>
        </form>

        <form class="accountUpdate" method="POST" onsubmit = "return validateForm()">

            <h1>Update Account</h1>

                <input type="text" placeholder="UserName" name="uptUsername" id="usernameUpt">
        
           

       
                <input type="text" placeholder="Password" name="uptPassword" id="passwordUpt">
            
         


                <input type="text" placeholder="Name" name="uptName" id="nameUpt">
        
           
    

                <input type="text" placeholder="Address" name="uptAddress" id="addressUpt">
 
           

 
                <input type="text" placeholder="PhoneNumber" name="uptPhone" id="phoneUpt">
      
          

             
                <input type="text" placeholder="Email Address" name="uptEmail" id="emailUpt">
      
            <input type="submit" class="submitBtn5" value="Update"  name="Btn1">

        </form>

    </div>
        <?php
            

            $servername = "localhost";
            $username = "X34331539";
            $password = "X34331539";
            $dbname = "X34331539";
            
            $dbc = mysqli_connect($servername, $username, $password, $dbname);
	
	  
		$uptUname = $_POST['uptUsername'];
		$uptPassword = $_POST['uptPassword'];
		$uptName = $_POST['uptName'];
		$uptAddress = $_POST['uptAddress'];
		$uptPhone = $_POST['uptPhone'];
		$uptEmail = $_POST['uptEmail'];


            if($_SESSION['username'] == 'user1'){
                if(isset($_POST['Btn1'])){

                    $query = "UPDATE USER SET USERNAME = '$uptUname',
		PASSWORD = '$uptPassword',NAME = '$uptName',ADDRESS = '$uptAddress',
		PHONENUMBER = '$uptPhone',EMAILADDRESS = '$uptEmail' WHERE USERID = 1   ";
                    $query_run = mysqli_query($dbc,$query);

                }
            }               


             if($_SESSION['username'] == 'user2'){
                if(isset($_POST['Btn1'])){

                    $query = "UPDATE USER SET USERNAME = '$uptUname',
		PASSWORD = '$uptPassword',NAME = '$uptName',ADDRESS = '$uptAddress',
		PHONENUMBER = '$uptPhone',EMAILADDRESS = '$uptEmail' WHERE USERID = 2   ";
                    $query_run = mysqli_query($dbc,$query);

                }
            }    

            if($_SESSION['username'] == 'user3'){
                if(isset($_POST['Btn1'])){

                    $query = "UPDATE USER SET USERNAME = '$uptUname',
		PASSWORD = '$uptPassword',NAME = '$uptName',ADDRESS = '$uptAddress',
		PHONENUMBER = '$uptPhone',EMAILADDRESS = '$uptEmail' WHERE USERID = 3   ";
                    $query_run = mysqli_query($dbc,$query);

                }
            }    

            if($_SESSION['username'] == 'staff1'){
                if(isset($_POST['Btn1'])){

                    $query = "UPDATE USER SET USERNAME = '$uptUname',
		PASSWORD = '$uptPassword',NAME = '$uptName',ADDRESS = '$uptAddress',
		PHONENUMBER = '$uptPhone',EMAILADDRESS = '$uptEmail' WHERE USERID = 101   ";
                    $query_run = mysqli_query($dbc,$query);

                }
            }    

            if($_SESSION['username'] == 'staff2'){
                if(isset($_POST['Btn1'])){

                    $query = "UPDATE USER SET USERNAME = '$uptUname',
		PASSWORD = '$uptPassword',NAME = '$uptName',ADDRESS = '$uptAddress',
		PHONENUMBER = '$uptPhone',EMAILADDRESS = '$uptEmail' WHERE USERID = 102  ";
                    $query_run = mysqli_query($dbc,$query);

                }
            }    

            if($_SESSION['username'] == 'staff3'){
                if(isset($_POST['Btn1'])){

                    $query = "UPDATE USER SET USERNAME = '$uptUname',
		PASSWORD = '$uptPassword',NAME = '$uptName',ADDRESS = '$uptAddress',
		PHONENUMBER = '$uptPhone',EMAILADDRESS = '$uptEmail' WHERE USERID = 103   ";
                    $query_run = mysqli_query($dbc,$query);

                }
            }    
                        

        ?>
<div class = "formAdminContent" id= "formContentAdmin">
<div class="formAdmin" >

                 <h1>View other Customer Info</h1>
            
                <section class = "adminForm">
                 <label>Enter a Customer Name : </label>
                 <input type = "text" name ="adminSearch" id="adminInput" onblur = "adminInput()">
		 
                <section>
                      <input type="submit" class="AdminsubmitBtn" value="Search"  name="adminBtn" >
            
        
	    <section>
                <label>Username : </label>
                <span id= "adminInfo1"></span>
            </section>
	   
            <section>
                <label>Password : </label>
                <span id= "adminInfo2"></span>
            </section>

            <section>
                <label>Name : </label>
                <span id= "adminInfo3"></span>
            </section>

            <section>
                <label>Address : </label>
                <span id= "adminInfo4"></span>
            </section>

            <section>
                <label>Phone Number : </label>
                <span id= "adminInfo5"></span>
            </section>

            <section>
                <label>Email Address : </label>
                <span id= "adminInfo6"></span>
            </section>






      

    </div>
<div>




    </main>
    <button type="submit" class="logOutbtn" id="logoutBtn"><a href="js/php/logout.php">Log Out</a></button>
    <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
    </footer>

        </div>


<div class="page p9" id="page9">

		   <div class="title1">
                    <span class="Title1Text">CATEGORIES</span>
                    <br/>
                    <span class="underlineTitle">
                     ___ 
                    </span>
                </div>

		<div class="category">  
                                
                    <section class="category1" id="menu2">
                        <a>
                            <img  src="css/images/toy2.png" >
                            
                        </a>
                        <span><a>NORMAL</a></span>
                    </section>
        
                    <section class="category2"  id="menu7">
                        <a>
                            <img  src="css/images/railroad.png" >
                            
                        </a>
                       <span><a>ASCENDING</a></span>
                    </section>
        
                    <section class="category3" id="menu8">
                        <a>
                            <img  src="css/images/building.png" >
                            
                        </a>
        
                        <span><a>DESCENDING</a></span>
                    </section>
        
                </div>    

        
        
                <div class="category">  
                                
                    <section class="category1" id="menu9">
                        <a>
                            <img  src="../../css/images/toy2.png" >
                            
                        </a>
                        <span><a>CAR TOYS</a></span>
                    </section>
        
                    <section class="category2" id="menu10">
                        <a>
                            <img  src="../../css/images/railroad.png" >
                            
                        </a>
                       <span><a>TRACK SET</a></span>
                    </section>
        
                    <section class="category3" id="menu11">
                        <a>
                            <img  src="../../css/images/building.png" >
                            
                        </a>
        
                        <span><a>LEGO SETS</a></span>
                    </section>
        
                </div>    
		<?php

		$servername = "localhost";
		$username = "X34331539";
		$password = "X34331539";
		$dbname = "X34331539";

		$dbc = mysqli_connect($servername, $username, $password, $dbname);

		$query = "SELECT * FROM PRODUCT WHERE Category ='Cars'";
    
    		$result = mysqli_query($dbc, $query);

		?>

		<div class="ContainerAll">  

		<?php

		while($row= mysqli_fetch_assoc($result)) {
			$Product_Name = $row['ProductName'];
			$Description = $row['Description'];
			$Price = $row['Price'];
			$Image = $row['ProductImage'];
		?>
                        <div class="card__container">
                        <div class="card_top_section">
                            <img src="<?php echo $Image?>" alt="image">
                            <div class="card_topsection_icons">
            
                                <div>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
            
                            </div>
                        </div>
                        <div class="card_body_section">
                            <p> <?php echo $Product_Name ?></p>
                            <span> <?php echo $Description ?></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span><?php echo $Price ?> </span>
                       </div>
                        </div>
                        </div>
                    </div>

                 
			<?php
			}
			?>

			</div>

 <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
            </footer>

	</div>


    <div class="page p10" id="page10">
		

		   <div class="title1">
                    <span class="Title1Text">CATEGORIES</span>
                    <br/>
                    <span class="underlineTitle">
                     ___ 
                    </span>
                </div>

	        
        		<?php

		$servername = "localhost";
		$username = "X34331539";
		$password = "X34331539";
		$dbname = "X34331539";

		$dbc = mysqli_connect($servername, $username, $password, $dbname);

		$query = "SELECT * FROM PRODUCT WHERE Category ='Track Set'";
    
    		$result = mysqli_query($dbc, $query);

		?>

		<div class="ContainerAll">  

		<?php

		while($row= mysqli_fetch_assoc($result)) {
			$Product_Name = $row['ProductName'];
			$Description = $row['Description'];
			$Price = $row['Price'];
			$Image = $row['ProductImage'];
		?>
                        <div class="card__container">
                        <div class="card_top_section">
                            <img src="http://ceto.murdoch.edu.au/~34315379/Assignment2/Dekstop/css/images/product/<?php echo $Image?>" alt="image">
                            <div class="card_topsection_icons">
            
                                <div>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
            
                            </div>
                        </div>
                        <div class="card_body_section">
                            <p> <?php echo $Product_Name ?></p>
                            <span> <?php echo $Description ?></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span><?php echo $Price ?> </span>
                       </div>
                        </div>
                        </div>
                    </div>

                 
			<?php
			}
			?>

			</div>

 <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
            </footer>

	
    </div>


    <div class="page p11" id="page11">
        
              
	   <div class="title1">
                    <span class="Title1Text">CATEGORIES</span>
                    <br/>
                    <span class="underlineTitle">
                     ___ 
                    </span>
                </div>

		<?php

		$servername = "localhost";
		$username = "X34331539";
		$password = "X34331539";
		$dbname = "X34331539";

		$dbc = mysqli_connect($servername, $username, $password, $dbname);

		$query = "SELECT * FROM PRODUCT WHERE Category ='Lego'";
    
    		$result = mysqli_query($dbc, $query);

		?>

		<div class="ContainerAll">  

		<?php

		while($row= mysqli_fetch_assoc($result)) {
			$Product_Name = $row['ProductName'];
			$Description = $row['Description'];
			$Price = $row['Price'];
			$Image = $row['ProductImage'];
		?>
                        <div class="card__container">
                        <div class="card_top_section">
                            <img src="http://ceto.murdoch.edu.au/~34315379/Assignment2/Dekstop/css/images/product/<?php echo $Image?>" alt="image">
                            <div class="card_topsection_icons">
            
                                <div>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
            
                            </div>
                        </div>
                        <div class="card_body_section">
                            <p> <?php echo $Product_Name ?></p>
                            <span> <?php echo $Description ?></span>
                        </div>
                        <div>
                        <div class="rating-section">
                        <div class="stars-rating">
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star rating-with-color"></i>
                         <i class="fas fa-star-half-alt rating-with-color"></i>
                         <span>4.5 out of 5</span>
                       </div>
                       <div class="c-price">
                         <span><?php echo $Price ?> </span>
                       </div>
                        </div>
                        </div>
                    </div>

                 
			<?php
			}
			?>

			</div>

 <footer>


                <div class="footerContent">
                    
                    <div class="footerDescription">
                        <img src="../../css/images/logo.png">
                        <p>Toys O'Clock is an e-commerce site that provides a platform for people 
                            to purchase toys. They offer different ranges of products such as 
                            but not limited to Hot Wheels, Mattel, etc at an affordable price.</p>
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <br>
                            <span><i class="fas fa-envelope"></i> &nbsp; something@gmail.com</span>
                    </div>
            
                    <div class="footerMap">
                        <h1>Find Us</h1>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.925076727972!2d98.6723441226448!3d3.5917700581799092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c7935d2b11%3A0x4d9985cafc1a23c6!2sCentre%20Point%20Mall%20(Medan)!5e0!3m2!1sen!2sid!4v1607009465259!5m2!1sen!2sid" 
                         width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
            
            
            
            
                </div>
            
                <div class="footerBottom">
                    <span>@ D E S I G N E D  &nbsp; B Y &nbsp;  S O M E O N E</span>
                </div>
            
            
            
            </footer>

	
    </div>  

   

</body>
</html>
