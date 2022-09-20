<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>VOYAGE</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Voyage</a>

   <nav class="navbar">
      <a href="home.php">accueil</a>
      <a href="about.php">à propos</a>
      <a href="package.php">paquet</a>
      <a href="book.php">réserver</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>réserver maintenant</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">réservez votre voyage !</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Nom :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>Numéro :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>où aller :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>Nombres :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivées :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>départ :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>liens rapides</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> accueil</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> à propos de nous</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> paquet</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> livre</a>
      </div>

      <div class="box">
         <h3>informations de contact</h3>
         <a href="tel:00228 90 00 00 00"> <i class="fas fa-phone"></i> +228 90 00 00 00 </a>
         <a href="tel:00228 79 00 00 00"> <i class="fas fa-phone"></i> +228 79 00 00 00 </a>
         <a href="mailto:alexandratohe@gmail.com"> <i class="fas fa-envelope"></i> alexandratohe@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> togo, lomé - BP:00107 </a>
      </div>

      <div class="box">
         <h3>suivez-nous</h3>
         <a href="http://www.linkedin.com/in/sssandrine-tohe-a4835820a" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> créé par <span>alexandra. web devellopper</span> | tous droits réservés! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>