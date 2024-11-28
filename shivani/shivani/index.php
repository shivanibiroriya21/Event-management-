 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event organize design website</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

    <!-- font awesom cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- it may need to change
 -->
    <!-- custom css file linl -->

    <link rel="stylesheet" href="style.css">

 </head>
 <body>
    
 <!-- header section starts -->


<header class="header">
   
   <a href="#" class="logo"><span>e</span>vento</a>

   <?php
   session_start();
   if(isset($_SESSION['loguser']))
   echo "<h2>Welcome &emsp; ".$_SESSION["loguser"]." &emsp; <a href='lout.php'>Logout</a></h2>";
   ?>
   <nav class ="navbar">
      <a href="#home">home</a>
      <a href="#service"> service</a>
      <a href="#about"> about</a>
      <a href="#gallery"> gallery</a>
      <a href="#price"> price</a>
      <a href="#reivew"> review</a>
      <a href="#contact"> contact</a>
      <a href="login.php"> login</a>
      <a href="Register.php"> Register</a>
      <a href="Booking.php"> Booking</a>
      
   </nav>

   <div id="menu-bars"  class="fas fa-bars"> </div>
</header>

 <!-- header section end -->


<!-- home section starts -->

 <section class="home" id="home">
   
   <div class="content">
      <h3>its time to celebrate the best <span> event organizers</span></h3>
         <a href="#" class="btn">contact us</a> 
    
   </div>

   <div class=" swiper-container home-slider">
      <div class=" swiper-wrapper">
         <div class="swiper-slide"><img src="images/header1.jpeg" alt=""></div>
         <div class="swiper-slide"><img src="images/header2.jpeg" alt=""></div>
         <div class="swiper-slide"><img src="images/header3.jpeg" alt=""></div>
         <div class="swiper-slide"><img src="images/img2.jpeg" alt=""></div>
         <div class="swiper-slide"><img src="images/pablo-heimplatz-ZODcBkEohk8-unsplash.jpg" alt=""></div>
         <div class="swiper-slide"><img src="images/img3.jpeg" alt=""></div>
         <div class="swiper-slide"><img src="images/aaron-paul-JMpnwlDTSBM-unsplash.jpg" alt=""></div>
         <div class="swiper-slide"><img src="images/marvin-meyer-IB5bld_weak-unsplash.jpg" alt=""></div>
         <div class="swiper-slide"><img src="images/nathan-defiesta-_AVqIQB_afM-unsplash.jpg" alt=""></div>
         <div class="swiper-slide"><img src="images/luise-and-nic-MRuDUyRT3UM-unsplash.jpg" alt=""></div>
      </div>
   </div>

</section> 
 


<!-- home section ends -->


<!-- service section start -->

<section class="service" id="services">

   <h1 class="heading"> our <span>services</span></h1>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3><a href="venu.php">venue selection</a></h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, inventore?
         </p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>invitation card</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, inventore?
         </p>
      </div>   

      <div class="box">
         <i class="fas fa-music"></i>
         <h3>entertainment</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, inventore?
         </p>
      </div>

      <div class="box">
         <i class="fas fa-utensils"></i>
         <h3>food and drink</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, inventore?
         </p>
      </div>

      <div class="box">
         <i class="fas fa-photo-video"></i>
         <h3>photos and videos</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, inventore?
         </p>
      </div>

      <div class="box">
         <i class="fas fa-birthday-cake"></i>
         <h3>custom food </h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, inventore?
         </p>
      </div>

   </div>
</section>


<!-- service section end -->

<!-- about sectio n starts -->

<section class="about" id="about">

<h1 class="heading"><span>about</span>us</h1>

<div class="row">

   <div class="image">
      <img src="images/about.jpeg" alt="">
   </div>

   <div class="content">
      <h3>we will give a very special celebration for you</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, nemo voluptatibus quia perferendis error molestias soluta iste mollitia, repudiandae accusantium nesciunt ullam quisquam suscipit sit iusto magnam illo odit sequi. Eos ipsam iusto sed quo esse iste incidunt repudiandae dolores repellat, consequatur autem aut placeat mollitia veritatis! Exercitationem, impedit quibusdam.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus explicabo accusamus ad nisi dignissimos hic mollitia sit praesentium laborum labore!</p>
      <a href="#" class="btn">contact us</a>
   </div>
</div>
</section>

<!-- about section end -->


<!-- gallery section start-->


<section class="gallery" id="gallery">

   <h1 class="heading">our <span>gallery</span></h1>

   <div class="box-container">

      <div class="box">
         <img src="images/md-duran-rE9vgD_TXgM-unsplash.jpg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/lance-reis-ipIe6snIBAs-unsplash.jpg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/gaelle-marcel-vrkSVpOwchk-unsplash.jpg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/img4.jpeg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/img5.jpeg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/img7.jpeg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/img6.jpeg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/img8.jpeg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      <div class="box">
         <img src="images/img9.jpeg" alt="">
         <h3 class="title">photo and events</h3>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
         </div>
      </div>
      
      
   </div>
</section>
<!-- gallery section end -->

<!-- price section start -->

<section class="price" id="price">

   <h1 class="heading">our <span>price</span></h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">for birthday</h3>
         <h3 class="amount">₹6000</h3>
         <ul>
            <li><i class="fas fa-check"></i> full services</li>
            <li><i class="fas fa-check"></i> decoration</li>
            <li><i class="fas fa-check"></i> music and photos</li>
            <li><i class="fas fa-check"></i> food and drink</li>
            <li><i class="fas fa-check"></i> invitation card</li>
         </ul>
         <a href="#" class="btn">check out</a>
      </div>

      <div class="box">
         <h3 class="title">for wedding</h3>
         <h3 class="amount">₹225000</h3>
         <ul>
            <li><i class="fas fa-check"></i> full services</li>
            <li><i class="fas fa-check"></i> decoration</li>
            <li><i class="fas fa-check"></i> music and photos</li>
            <li><i class="fas fa-check"></i> food and drink</li>
            <li><i class="fas fa-check"></i> invitation card</li>
         </ul>
         <a href="#" class="btn">check out</a>
      </div>

      <div class="box">
         <h3 class="title">for concerts</h3>
         <h3 class="amount">₹800000</h3>
         <ul>
            <li><i class="fas fa-check"></i> full services</li>
            <li><i class="fas fa-check"></i> decoration</li>
            <li><i class="fas fa-check"></i> music and photos</li>
            <li><i class="fas fa-check"></i> food and drink</li>
            <li><i class="fas fa-check"></i> invitation card</li>
         </ul>
         <a href="#" class="btn">check out</a>
      </div>

      <div class="box">
         <h3 class="title">for others</h3>
         <h3 class="amount">₹66000</h3>
         <ul>
            <li><i class="fas fa-check"></i> full services</li>
            <li><i class="fas fa-check"></i> decoration</li>
            <li><i class="fas fa-check"></i> music and photos</li>
            <li><i class="fas fa-check"></i> food and drink</li>
            <li><i class="fas fa-check"></i> invitation card</li>
         </ul>
         <a href="#" class="btn">check out</a>
      </div>
   </div>
</section>
<!-- price section end -->

<!-- review section start  -->

 <section class="review" id="review">
   
   <h1 class="heading">client's <span>review</span></h1>
   
   <div class="review-slider swiper-container">

      <div class="swiper-wrapper">

         <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
               <div class="user">
                  <img src="images/john.jpeg" alt="">
                  <div class="user-info">
                     <h3>john</h3>
                     <span>happy client's</span>
                  </div>
               </div>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis earum qui animi vitae totam, repellendus, vero eaque fugiat quasi magni deleniti eius facere quidem natus ex. Aliquam officia ea consequatur?
                  </p>
         </div>
         <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
               <div class="user">
                  <img src="images/girl.jpeg" alt="">
                  <div class="user-info">
                     <h3> devo</h3>
                     <span>happy client's</span>
                  </div>
               </div>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis earum qui animi vitae totam, repellendus, vero eaque fugiat quasi magni deleniti eius facere quidem natus ex. Aliquam officia ea consequatur?
                  </p>
         </div>
         <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
               <div class="user">
                  <img src="images/roy.jpeg" alt="">
                  <div class="user-info">
                     <h3>roy</h3>
                     <span>happy client's</span>
                  </div>
               </div>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis earum qui animi vitae totam, repellendus, vero eaque fugiat quasi magni deleniti eius facere quidem natus ex. Aliquam officia ea consequatur?
                  </p>
         </div>
         <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
               <div class="user">
                  <img src="images/mike.jpeg" alt="">
                  <div class="user-info">
                     <h3>mike</h3>
                     <span>happy client's</span>
                  </div>
               </div>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis earum qui animi vitae totam, repellendus, vero eaque fugiat quasi magni deleniti eius facere quidem natus ex. Aliquam officia ea consequatur?
                  </p>
         </div>
      </div>

   </div>
</section>




<!-- review section end -->


<!-- contact section start-->

 <section class="contact" id="contact">
   
<h1 class="heading"><span>contact </span>us</h1>

<form action="">
   <div class="inputBox">
      <input type="text" placeholder="name" name="u">
      <input type=" email" placeholder="email" name="e">
   </div>

   <div class="inputBox">
      <input type="number" placeholder="number" name="ph">
      <input type=" text" placeholder="subject" name="s">
   </div>
   <textarea placeholder ="your message" id="" cols="30" rows="10" name="msg"></textarea>
   <input type="submit" name="submit" value="send message" class="btn">

   </a>
</form>
<?php
 $con=mysqli_connect('localhost','root','','project');
   
if(isset($_REQUEST['submit']))
{

   $u=$_REQUEST['u'];
   $e=$_REQUEST['e'];
   $ph=$_REQUEST['ph'];
   $s=$_REQUEST['s'];
   $msg=$_REQUEST['msg'];
   $q="insert into ucont(uname,email,number,subject,message)values('$u','$e','$ph','$s','$msg')";
   mysqli_query($con,$q);
   echo "<h3>Thanks for Contact Our Team contact you soon</h3>";
}
?>
</section>


<!-- contact section end  -->

<!-- footer section start -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>branches</h3>
         <a href="#"> <i class="fas fa-map-marker-alt"></i> almora</a>
         <a href="#"> <i class="fas fa-map-marker-alt"></i> nainital</a>
         <a href="#"> <i class="fas fa-map-marker-alt"></i> dehradoon</a>
         <a href="#"> <i class="fas fa-map-marker-alt"></i>haridwar</a>
         <a href="#"> <i class="fas fa-map-marker-alt"></i> haldwani</a>
      </div>

      <div class="box">
         <h3> quick links</h3>
         <a href="#"> <i class="fas fa-arrow-right"></i> home</a>
         <a href="#"> <i class="fas fa-arrow-right"></i> service</a>
         <a href="#"> <i class="fas fa-arrow-right"></i> about</a>
         <a href="#"> <i class="fas fa-arrow-right"></i> gallery</a>
         <a href="#"> <i class="fas fa-arrow-right"></i> price</a>
         <a href="#"> <i class="fas fa-arrow-right"></i> reivew</a>
         <a href="#"> <i class="fas fa-arrow-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
         <a href="#"> <i class="fas fa-envelope"></i>evento@gamil.com </a>
         <a href="#"> <i class="fas fa-envelope"></i>evento123@gmail.com </a>
         <a href="#"> <i class="fas fa-envelope"></i>planners@gmail.com </a>
         <a href="#"> <i class="fas fa-map-marker-alt"></i>uttarakhand , india-</a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
         <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
         
        
      </div>
   </div>
  <div class="credit">Created by <span>Shivani and Jyoti</span></div>
</section>
 
<!-- footer section end -->

<!-- theme toggler -->

<div class="theme-toggler">

   <div class="toggle-btn">
      <i class="fas fa-cog"></i>
   </div>

   <h3>choose color</h3>

   <div class="buttons">
      <div class="theme-btn" style="background-color: #3867d6;"></div>
      <div class="theme-btn" style="background-color: #f7b731;"></div>
      <div class="theme-btn" style="background-color: #ff0033;"></div>
      <div class="theme-btn" style="background-color: #20bf6b;"></div>
      <div class="theme-btn" style="background-color: #fa8231;"></div>
      <div class="theme-btn" style="background-color: #FC4278;"></div>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

   <!-- custom js file link -->
   <script src="script.js"></script>
 </body>
 </html>