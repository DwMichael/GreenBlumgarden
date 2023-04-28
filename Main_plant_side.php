<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenBlumGarden</title>
    <link rel="stylesheet" type="text/css" href="Main_plant_side.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
</head>
<body>
   
        <div id="menu">
        <img class="logo" src="logo1.png" alt="logo">
        <nav>
            
             <ul class="menu_nav" >
                 <li><a href="index.php">Main side</a>   </li>
                 <li><a href="Main_plant_side.php">Types of plants</a>   </li>
                 <li><a href="shop.php">Shop</a>   </li>
                 <li><a href="Where_can_you_find_us.php">Where can you find us</a>   </li>
             </ul>
        </nav>
        <div class="user_name">
        <?php if (isset($_SESSION['usernamee'])!=0)
        {
            echo $_SESSION['usernamee'];
        }else
        {
            echo"<a href='log_In.php'>"."log in/Sing up"."</a>";
        } ?>
        <i class="icon-user-circle-o"></i> 
        <?php if (isset($_SESSION['usernamee'])!=0)
        {
            echo"<a href='log_Out.php'>"."Log out"."</a>";
        }?>
            </div>
            <a class="cta" href="CONTACT_US.php" ><button>Contact</button></a>
     </div>
    
     
        </div>
        <div id="conteiner">
    <div id="content">
          <h1 class="mini_main">IN OUR SHOP YOU CAN FIND THREE TYPES OF PLANTS</h1>
                 <div id="plants" class="p1"> 
                     <p><img src="kaktus.webp" class="ob1">
                            <h1>DESERT PLANTS</h1>
                            <p class="line"> Those plants like sun and high temperature </p>
                            <p class="line">Best for those how live in such a place or like flowers of sands</p> 
                            <br>
                           
                            <a href="shop.php" style="font-weight:bold;">Check in our shop</a>
    </p>
                            </div>
                            <div id="plants" class="p2">
                            <p><img src="jg.webp"class="ob1">
                            <h1>TROPICAL PLANTS</h1>
                            <p>Those plants are very sensitive and hard to maintain</p>
                            <p>But they are so beautiful that they are worth time what you will spend to rise them</p>
                            <br>
                             <a href="shop.php" style="font-weight:bold;">Check in our shop</a>
    </p>
                             </div>
                             <div id="plants" class="p3">
                            <p><img src="ogrod1.webp"class="ob1">
                             <h1>HOME,GARDEN PLANTS</h1>
                             <p> Those plants are good for everyone </p>
                            <p>With them every home garden will turn into royal garden </p> 
                           
                           <br>
                             <a href="shop.php" style="font-weight:bold;">Check in our shop</a>
    </p>
                            </div>
    </div><!--koniec contentu-->


     
 <div id="Footer">
    <h1>Follow us on social media</h1>
    <p></p>
    <a href="#"><i class="icon-twitter-squared"></i></a>
    <a href="#"><i class="icon-facebook-squared"></i></a>
    <a href="#"><i class="icon-instagram-1"></i></a>

   <div class="TT"><p>Zawartość tej strony jest chroniona prawem autorskim</p><p>i należy do spółki GreenBlumGarden MD.</p><p> GreenBlumGarden oferuje rośliny najwyższej jakości, które jest przyjazna dla ludzi.</p></div>
    <div class="imgg"><img class="logo" src="logo1.png" alt="logo"></div>
  </div>
 </div>
    </div>
    
</body>
</html>