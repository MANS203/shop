<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>ATZ SHOP Online Shopping Store</title>
   <link rel="stylesheet" href="login.css">
   <link rel="icon" type="image/x-icon" href="logo icon .jpg">
</head>

<body>
   <form  method="POST">
     <?php include("backend/login_bc.php") ?>
      <h1>Log in</h1>
      <?php 
               // if(isset($username_err))
               // {
               //    echo $username_err;
               // }
		?>
      <input type="text" name="username" id="username" placeholder="username"><br>

      <?php 
			// if(isset($password_err))
			// {
			// 	echo $password_err;
			// }
		?>
      <input type="text" name="password" id="password" placeholder="password"><br>

      <input type="submit" class="btn" name="login" value="Login">
      <br>
      
      <p>Don't have an account?</p>
      <a href="rigister.php">Click here to Sign up</a>
   </form>
</body>

</html>