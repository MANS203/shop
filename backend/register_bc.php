<?php
include('Connections.php');

$err_s=0;
  if(isset($_POST['submit']))
  {
  $firstname =($_POST['firstname']);
  $lastname =($_POST['lastname']);
  $username = ($_POST['username']);
  $email =($_POST['email']);
  $address =($_POST['address']);
  $password = ($_POST['password']);
  $con_pass =($_POST['con_pass']);
 }

  if (empty($username))
  {

      $user_error = '<p>Please enter your username</p> ' ;
      $err_s = 1 ;
  
    }



  elseif(empty($email))
  {

      $email_error = '<p>Please enter your email</p>';
      $err_s = 1 ;

    
  }
 
  if(empty($password))
  {
    
      $password_error = '<p>Please enter your password</p>';
      $err_s = 1 ;
      
  }
if ($err_s == 0) {
  if ($password != $con_pass) {
    $message[] = '<p"> not confirm password </p>';
  } else {
    mysqli_query($data, "INSERT INTO `data`( firstname , lastname , username ,address, email, password) 
            VALUES('$firstname','$lastname','$username','$address', '$email', '$password')");

    header('location:login.php');
  }
}
      // else{

      //   if($err_s == 0){
          
      // $sql = "INSERT INTO writers (name, username, password, email) 
      // VALUES ('$name','$username','$password','$email')";


      //   mysqli_query($data,$sql);

      //     header('location:login.php');
      //   }
