 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>ATZ SHOP Online Shopping Store</title>
   <link rel="stylesheet" href="home.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="icon" type="image/x-icon" href="logo icon .jpg">
 </head>

 <body>

   <section id="header">
     <img src="logo.jpg" class="logo" alt="">
     <div id="search">
       <input id="input" type="search" autocomplete="off" spellcheck="false" role="combobox" placeholder="Search Product..." aria-live="polite">
       </input>
       <button class="normal">
         <h3>Search</h3>
       </button>
     </div>
     <div>
       <ul id="navbar">
         <li><a href="shopping.php">Shopping</a></li>
         <li><a href="#">My Account</a></li>
         <li><a href="#">Wishlist</a></li>
         <li>
           <div class="dropdown">
             <button class="dropbtn" onclick="myFunction()">
               <i class="fa fa-shopping-cart"></i>
               Cart
               <i class="fa fa-angle-down"></i>
             </button>
             <div class="dropdown-content right" id="myDropdown">
               <a href="#">
                 <img src="pro1.jpg" alt="">
                 <h3>Ornare sed consequat</h3>
                 <p>$ 81.00</p>
               </a>
               <a href="#">
                 <img src="pro2.jpg" alt="">
                 <h3>Pellentesque posuere</h3>
                 <p>$ 80.00</p>
               </a>
             </div>
           </div>
         </li>
       </ul>
     </div>


   </section>

   <section id="slid">
     <div class="container" class="carousel slide" data-bs-ride="carousel">
       <div class="mySlides">
         <div id="hero" class="numbertext">
           <h1>SUMMER SALE</h1>
           <p>Get up to 50% off your shopping items tomorrow!</p>
           <button>Shop Now</button>
         </div>
         <img src="model-being-covered-by-shopping-bags-copy-space_23-2148674119.png" style="width:100%">
       </div>

       <div class="mySlides">
         <div id="hero2" class="numbertext">
           <h1>NEW YEAR SALE</h1>
           <p>Get up to 50% off your shopping items tomorrow!</p>
           <button>Shop Now</button>
         </div>
         <img src="WhatsApp Image 2022-12-14 at 01.58.59.jpg" style="width:100%">
       </div>

       <div class="mySlides">
         <div id="hero3" class="numbertext">
           <h1>50% OFF IN ALL PRODUCTS</h1>
           <p>Get up to 50% off your shopping items tomorrow!</p>
           <button>Shop Now</button>
         </div>
         <img src="istockphoto-1185418020-170667a.jpg" style="width:100%">
       </div>
     </div>
     <br>
     <div style="text-align: center">
       <span class="dot" onclick="currentSlide(1)"></span>
       <span class="dot" onclick="currentSlide(2)"></span>
       <span class="dot" onclick="currentSlide(3)"></span>

     </div>
     <script>
       var myIndex = 0;
       carousel();

       function carousel() {
         var i;
         var x = document.getElementsByClassName("mySlides");
         for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
         }
         myIndex++;
         if (myIndex > x.length) {
           myIndex = 1
         }
         x[myIndex - 1].style.display = "block";
         setTimeout(carousel, 3000);
       }
     </script>

   </section>

   <section id="feature" class="section-p1">
     <table>
       <tr>

         <th>
           <div class="box">
             <i class="fa fa-truck"></i>
             <h4>FREE DELIVERY</h4>
             <br>
             <h6>WORLDWIDE</h6>
           </div>
         </th>

         <th>
           <div class="box2">
             <i class="fa fa-headphones"></i>
             <h4>24/7 SUPPORT</h4>
             <br>
             <h6>CUSTOMER SUPPORT</h6>
           </div>
         </th>

         <th>
           <div class="box3">
             <i class="fa fa-cc-mastercard"></i>
             <h4>PAYMENT</h4>
             <br>
             <h6>SECURE SYSTEM</h6>
           </div>
         </th>

         <th>
           <div class="box4">
             <i class="fa fa-trophy"></i>
             <h4>TRUSTED</h4>
             <br>
             <h6>ENUINE PRODUCTS</h6>
           </div>
         </th>

       </tr>
     </table>

   </section>

   <section id="product1">
     <table class="mmm">
       <tr>
         <th>
           <h2>DEALS OF THE DAY</h2>
         </th>
       </tr>
     </table>
     <div class="pro-container">
       <div class="pro">
         <div id="maram">
           <img src="pro1.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
           <div>
             <a href="#" class="color1"></a>
             <a href="#" class="color2"></a>
             <a href="#" class="color3"></a>
           </div>
         </div>
         <div class="des">
           <h4>Variable Product 001</h4>
           <h4>Code: 1001</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 78.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro2.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Ornare sed consequat</h4>
           <h4>Code: 1002</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 95.00</p>
             <h3>$ 81.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro6.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Pellentesque posuere</h4>
           <h4>Code: 1006</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 80.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro4.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>consequat posuere</h4>
           <h4>Code: 1004</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 50.00</p>
             <h3>$ 45.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro5.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Variable Product 001</h4>
           <h4>Code: 1005</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 78.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro1.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Ornare sed consequat</h4>
           <h4>Code: 1001</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 95.00</p>
             <h3>$ 81.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro2.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Pellentesque posuere</h4>
           <h4>Code: 1002</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 80.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro6.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>consequat posuere</h4>
           <h4>Code: 1006</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 50.00</p>
             <h3>$ 45.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro4.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>consequat posuere</h4>
           <h4>Code: 1004</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 50.00</p>
             <h3>$ 45.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro5.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>consequat posuere</h4>
           <h4>Code: 1005</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 50.00</p>
             <h3>$ 45.00</h3>
           </div>

         </div>
       </div>

     </div>
     </div>

   </section>

   <section id="fashion">
     <div id="black-fashion" class="proudct-fashion">
       <div class="text">
         <a href="#">black fashion</a>
       </div>
       <img src="black fashion2.jpg" alt="">
     </div>
     </div>

     <div id="white-fashion" class="proudct-fashion">
       <div class="text">
         <a href="#">white fashion</a>
       </div>
       <img src="white fashion.jpg" alt="">
     </div>
     </div>

     <div id="classic-fashion" class="proudct-fashion">
       <div class="text">
         <a href="#">classic fashion</a>
       </div>
       <img src="classic fashion.jpg" alt="">
     </div>
     </div>
   </section>

   <section id="product2">
     <table class="mmm">
       <tr>
         <th>
           <h2>POPULAR PRODUCTS</h2>
         </th>
       </tr>
     </table>
     <div class="pro-container">
       <div class="pro">
         <div id="maram">
           <img src="pro1.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
             <!-- <div>
          <a href="#" class="color1"></a>
          <a href="#" class="color2"></a>
          <a href="#" class="color3"></a>
        </div>-->
           </div>

         </div>
         <div class="des">
           <h4>Variable Product 001</h4>
           <h4>Code: 1001</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 78.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro2.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Ornare sed consequat</h4>
           <h4>Code: 1002</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 95.00</p>
             <h3>$ 81.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro3.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Pellentesque posuere</h4>
           <h4>Code: 1003</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 80.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro4.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>consequat posuere</h4>
           <h4>Code: 1004</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 50.00</p>
             <h3>$ 45.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro5.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Variable Product 001</h4>
           <h4>Code: 1005</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 78.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro6.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Ornare sed consequat</h4>
           <h4>Code: 1006</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 95.00</p>
             <h3>$ 81.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro1.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Pellentesque posuere</h4>
           <h4>Code: 1001</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 80.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro2.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>consequat posuere</h4>
           <h4>Code: 1002</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 50.00</p>
             <h3>$ 45.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro3.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Pellentesque posuere</h4>
           <h4>Code: 1003</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 80.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro4.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>consequat posuere</h4>
           <h4>Code: 1004</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 50.00</p>
             <h3>$ 45.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro5.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Variable Product 001</h4>
           <h4>Code: 1005</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 78.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro6.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Ornare sed consequat</h4>
           <h4>Code: 1006</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 95.00</p>
             <h3>$ 81.00</h3>
           </div>

         </div>
       </div>
       <div class="pro">
         <div id="maram">
           <img src="pro1.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Variable Product 001</h4>
           <h4>Code: 1001</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 78.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro2.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Ornare sed consequat</h4>
           <h4>Code: 1002</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 95.00</p>
             <h3>$ 81.00</h3>
           </div>

         </div>
       </div>

       <div class="pro">
         <div id="maram">
           <img src="pro3.jpg" alt="">
           <div class="overlay">
             <a href="#"><i class="fa fa-shopping-cart"></i></a>
             <a href="#"><i class="fa fa-heart"></i></a>
             <a href="#"><i class="fa fa-eye"></i></a>
             <a href="#"><i class="fa fa-refresh"></i></a>
           </div>
         </div>
         <div class="des">
           <h4>Pellentesque posuere</h4>
           <h4>Code: 1003</h4>
           <div class="star">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-empty"></i>
             <p>$ 90.00</p>
             <h3>$ 80.00</h3>
           </div>

         </div>
       </div>


     </div>
     </div>

   </section>

   <section id="Updates">
     <div id="Follow">
       <h4>Follow Our Updates!</h4>
       <h5>If you want to get an email from us every time we have a new special offer,</h5>
       <h5> then sign up here!</h5>
     </div>
     <div id="Email">
       <input type="email" placeholder="Enter Email Address">
       <button>Submit</button>
       </input>
     </div>
   </section>

   <footer>
     <div class="col">

       <img src="logo.jpg" alt="">
       <p>There are many variations of passages of Lorem Ipsum </p>
       <p>available,but the majority have suffered alteration in some </p>
       <p>form,by injected humour, or randomised words which don't </p>
       <p>look even slightly believable.</p>
       <div class="follow">
         <h4>FOLLOW US</h4>
         <div class="icon">
           <a href="#"><i class="fa fa-facebook-f"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
           <a href="#"><i class="fa fa-linkedin"></i></a>
           <a href="#"><i class="fa fa-pinterest-p"></i></a>
           <a href="#"><i class="fa fa-google-plus"></i></a>
         </div>
       </div>
     </div>


     <div class="col-categorie">
       <h4>CATEGORIES</h4>
       <a href="#">Fashion Sneakers</a>
       <a href="#">Jackets</a>
       <a href="#">Outdoor Shop</a>
       <a href="#">Pants</a>
       <a href="#">Shirts & Tops</a>
       <a href="#">Swim Shop</a>
       <a href="#">Swimwear</a>
     </div>

     <div class="col-account">
       <h4>MY ACCOUNT</h4>
       <a href="#">Orders</a>
       <a href="#">Compare</a>
       <a href="#">Wishlist</a>
       <a href="login.php">Log In</a>
       <a href="rigister.php">Register</a>
     </div>

     <div class="col-policy">
       <h4>POLICY</h4>
       <a href="#">Return Policy</a>
       <a href="#">Terms Of Use</a>
       <a href="#">Security</a>
       <a href="#">Privacy</a>
       <a href="#">Sitemap</a>
       <a href="#">EPR Compliance</a>
     </div>

     <div class="col-help">
       <h4>HELP</h4>
       <a href="#">Payments</a>
       <a href="#">Shipping</a>
       <a href="#">Cancellation & Returns</a>
       <a href="#">FAQ</a>
       <a href="#">Report Infringement</a>
     </div>
   </footer>
   <hr>
   <section id="communicate">

     <div class="communicate">
       <table class="tab">
         <tr>
           <th><i class="fa fa-map-marker"></i></th>
         </tr>
       </table>
       <p>c/o Giunti International Division Via G.B. Pirelli</p>
     </div>

     <div class="communicate">
       <table>
         <tr>
           <th><i class='fa fa-phone'></i></th>
         </tr>
       </table>
       <p>+025 2155 3255</p>
     </div>

     <div class="communicate">
       <table>
         <tr>
           <th><i class="fa fa-envelope-square"></i></th>
         </tr>
       </table>
       <p>info@gmail.com</p>
     </div>

     <br>



   </section>

   <section id="payment">

     <p>Copyright © 2018. All Rights Reserved.</p>
     <div>
       <i class="fa fa-cc-paypal"></i>
       <i class="fa fa-cc-discover"></i>
       <i class="fa fa-cc-visa"></i>
       <i class="fa fa-cc-mastercard"></i>
       <i class="fa fa-cc-discover"></i>
     </div>
   </section>


 </body>



 </html>