<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATZ SHOP Online Shopping Store</title>
    <link rel="stylesheet" href="shopping.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="logo icon .jpg">
 </head>
 <body>

  <section id="header">
       <a href="#"><img src="logo.jpg" class="logo" alt=""></a>
      <div id="search">
         <input id="input" type="search" autocomplete="off" spellcheck="false" role="combobox" placeholder="Search Product..." aria-live="polite" >
      </input>
      <button class="normal"><h3>Search</h3></button>
       </div>
       <div>
        <ul id="navbar">
          <li><a href="home.html">Home</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Wishlist</a></li>
        </ul>
       </div>

       
  </section>

  <section id="product">
    <!--<h4>code:</h4>-->
    <input type="text" name="codeproudect" id="codeproudect"placeholder="code proudect"><br>
    <!--<h4>color:</h4>-->
    <select aria-label="color" name="colorproduct" id="colorproduct" title="colorproduct" class="_9467_5dba_9hk6_8esg">
        <option value="1">red</option>
        <option value="2">black</option>
        <option value="3">white</option>
        <option value="4">Green</option>
    </select>
    <!--<h4>size:</h4>-->
    <select aria-label="size" name="size_product" id="size_product" title="size_product" class="_9467_5dba_9hk6_8esg">
        <option value="1">small</option>
        <option value="2">larg</option>
        <option value="3">x larg</option>
        <option value="3">xx larg</option>
    </select>
    <h4>address:</h4>
    <input type="text" name="address" id="address"placeholder="Address"><br>
    <!--<h4>phone number:</h4>-->
    <input type="text" name="phone" id="phone"placeholder="Phone Number"><br>
    <button>Submit</button>
  </section>

</body>
</html>	