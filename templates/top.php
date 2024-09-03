
<?php  session_start();  ?>


<?php  $uri=$_SERVER['REQUEST_URI'];
  $uriAr = explode("/", $uri);
  $page = end($uriAr); 
  $_SESSION['page']=$page; 
  $per=15;
  function discount($price,$per = 15)
  {
    $p1=$price/$per;
    $p2=$price-ceil($p1);
    return $p2;
  }
  
  
  ?>

<?php     
     include "./classes/db.php";
     $l=new Database();
     $con=$l->connect();
 
            if(isset($_POST['add-to-cart']))  {
                  
              if(isset($_SESSION['user_id']))
            { 
            $pid= $_POST['pid'];
            $cat=$_POST['cat'];
            $uid = $_SESSION['user_id'];
            $e=$con->query("SELECT p_id FROM cart WHERE cart.p_id='$pid' AND cart.user_id='$uid'");
             if($e->num_rows > 0) 
             {
              $message[]="product is already in the cart ";
             }
             else {

                     if($cat == 13){
                      if(isset($_POST['size1']) && $_POST['size1'] != "" ){
                        $size = $_POST['size1'];
                      $q=$con->query("INSERT INTO `cart` (`id`,`p_id`,`user_id`,`qty`, `size`) VALUES (NULL, '$pid','$uid','1','$size')");
                      if($q)
                      {
                        $message[]="product added  to cart  successfully  ";
                      }
                      else{
                        $message[]="cant add to cart query fault";
                      }
                    }
                    else{
                      $message[]="Please select size to proceed";
                    }

                     }
                     else if ($cat == 16)
                     {
                      if(isset($_POST['size2']) && $_POST['size2'] != "" ){
                        $size = $_POST['size2'];
                      $q=$con->query("INSERT INTO `cart` (`id`,`p_id`,`user_id`,`qty`, `size`) VALUES (NULL, '$pid','$uid','1','$size')");
                      if($q)
                      {
                        $message[]="product added  to cart  successfully  ";
                      }
                      else{
                        $message[]="cant add to cart query fault";
                      }
                    }
                    else{
                      $message[]="Please select size to proceed";
                    }
                     }
                     else{
                    
                      $q=$con->query("INSERT INTO `cart` (`id`,`p_id`,`user_id`,`qty`) VALUES (NULL, '$pid','$uid','1')");
                      if($q)
                      {
                        $message[]="product added  to cart  successfully ";
                      }
                      else{
                        $message[]="cant add to cart query fault";
                      }
                     }
           

          }
          }
          else{
            $message[]= "please login to add to cart";
          }
        }
       
      
      ?>
     



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>neuStore</title>

  <!--
    - favicon
  
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
      -->
  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/editprofile.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/all.css">
  <link rel="stylesheet" href="./assets/css/all.min.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <script src="./js/jquery2.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="./js/main.js"></script>

</head>

<body>

  <div class="overlay" data-overlay></div>

   <!--
    - HEADER
  -->

  <header>

    
    <?php include("header_main.php");   ?>
    
<?php   

if(isset($message))
{
  foreach($message as $message)
  {
    echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display= `none`;"></i> </div>';

  };
  $message="";
};
?>
    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="search.php?key=electronics">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=desktop">Desktop</a>
                </li>

                <li class="panel-list-item">
                  
                  <a href="search.php?key=laptop">Laptop</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=camera">Camera</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=tablet">Tablet</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=headphone">Headphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=headphone">
                    <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250"
                      height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Men's</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=formal">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=casual">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=sports">Sports</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=jacket">Jacket</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=sungalsess">Sunglasses</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=men">
                    <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Women's</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=dress">Dress and frocks</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=perfume">Perfume</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=cosmetics">Cosmetics</a>
                </li>
                 <li class="panel-list-item">
                  <a href="search.php?key=shampoo">Shampoo</a>
                </li>
                <li class="panel-list-item">
                  <a href="search.php?key=shampoo"> </a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=women">
                    <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=smartwatch">Smart Watch</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=tv">Smart TV</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=keyboard">Keyboard</a>
                </li>

                <li class="panel-list-item">
                  <a href="search.php?key=mouse">Mouse</a>
                </li>


                <li class="panel-list-item">
                  <a href="search.php?key=mouse">
                    <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Men's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="search.php?key=shirt">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=shorts">Shorts & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=shoes">Safety Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=wallet">Wallet</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Women's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="search.php?key=dress">Dress & Frock</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=earrings">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=necklace">Necklace</a>
              </li>

             

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Jewellary</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="search.php?key=earrings">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=rings">Couple Rings</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=necklace">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="search.php?key=bracelets">Bracelets</a>
              </li>

            </ul>
          </li>

          

          <li class="menu-category">
            <a href="myorders.php" class="menu-title">My orders</a>
          </li>

          <li class="menu-category">
            <a href="myprofile.php" class="menu-title">Profile</a>
          </li>
          <li class="menu-category">
            <a href="#about" class="menu-title">About</a>
          </li>
          <li class="menu-category">
            <ul class="header-social-container">

              <li>
                <a href="www.facebook.com" class="social-link">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="www.instagram.com" class="social-link">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="www.tewitter.com" class="social-link">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
    
              
  
            </ul>
          </li>
        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>

      <a href="cart.php" class="action-btn">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>

        <?php  if(isset($_SESSION['user_id'])) {
           $con=mysqli_connect("localhost","root","","neustore"); 

           $uid=$_SESSION['user_id']; $q=mysqli_query($con,"SELECT * FROM cart  WHERE user_id='$uid'"); 
        
           $count=mysqli_num_rows($q);
            echo '<span class="count">'.$count.'</span>';
         }  ?> 
      </a>

      <button class="action-btn">
      <a href="index.php" class='homes'> <i class="fas fa-home    "></i></a>
      </button>

      <a href="myprofile.php" class="action-btn">
        <i class="fa fa-user" aria-hidden="true"></i>
        </a>
      <?php if($page == "index.php" || $page == "search.php" || $page == "product.*" || $page == "category.php") { ?>
      <button class="action-btn" data-mobile-menu-open-btn>
       <i class="fa fa-list" aria-hidden="true"></i>
      </button>
      <?php } ?>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <i class="fa fa-window-close" aria-hidden="true"></i>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="index.php" class="menu-title">Home</a>
        </li>
        <li class="menu-category">
          <a href="#about" class="menu-title">About</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <i class="fa fa-plus" aria-hidden="true"></i>
              <i class="fa fa-minus" aria-hidden="true"></i>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="search.php?key=shirt" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=shorts" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=shoes" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=wallet" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <i class="fa fa-plus" aria-hidden="true"></i>
              <i class="fa fa-minus" aria-hidden="true"></i>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="search.php?key=dress" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=earrings" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=necklace" class="submenu-title">Necklace</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <i class="fa fa-plus" aria-hidden="true"></i>
                   <i class="fa fa-minus" aria-hidden="true"></i>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="search.php?key=earrings" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=rings" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=necklace" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="search.php?key=bracelets" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

       
        <li class="menu-category">

        

<?php   if(isset($_SESSION['user_id']))
          {
            echo  "<a href='logout_user.php'  class='log'> <h4>Logout</h4> </a>";
          }
          else{
            echo "<a href='login.php'  class='log'><h4>Login</h4></a>";
          }

          ?>
        </li>
        <li class="menu-category">
          <ul class="head-social-containerer  mobile-social">

            <li>
              <a href="wwww.facebook.com" class="social-link">
                <i class="fab fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="wwww.instagram.com" class="social-link">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="www.twitter.com" class="social-link">
                <i class="fab fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
  
            

          </ul>
        </li>

      </ul>

    

    </nav>

  </header>