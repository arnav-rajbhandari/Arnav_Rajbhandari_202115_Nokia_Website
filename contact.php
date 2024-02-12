<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
  
    $con=new mysqli('localhost','root','', 'nokia_form');
    if($con){
      //echo "Connection Successfull";
      $sql="insert into `contact_form` (name,email,message) values('$name','$email','$message')";
      $result=mysqli_query($con,$sql);
      if($result){
        
        echo'<script type="text/JavaScript">';
        echo'alert("Data inserted successfully")' ; 
        echo '</script>';
        
      }
      else{
        die(mysql_error($con));
      }
    }
    else{
      die(mysql_error($con));
    }
  }
?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" href="script.js"></script>
</head>
<body>
     <nav>
      <div class="nav-upper">
        <a href="https://www.instagram.com/nokia/?hl=en"><img src="iglogo.png" alt="Logo" class="logo-upper-right"></a>
        <a href="https://www.facebook.com/nokia/"><img src="fblogo.png" alt="Logo" class="logo-upper-right"></a>
        <a href="https://twitter.com/nokia"><img src="twlogo.png" alt="Logo" class="logo-upper-right"></a>
      </div>
      <div class="nav-lower">
        <a href="home.html"><img src="nokialogo.png" alt="Logo" class="logo-lower-left"></a>
        <ul>
          <li><a href="products.html" class="nav-link">Products</a></li>
          <li><a href="contact.php" class="nav-link">Contact</a></li>
          <li><a href="about.html" class="nav-link">We Are Nokia</a></li>
          <li><a href="support.html" class="nav-link">Support</a></li>
        </ul>
      </div>
    </nav>

    <section class="split-section">
  <div class="left-division">
    <h2 class="header">Find us on</h2>
    <div class="logo-container">
      <a href="https://www.instagram.com/nokia/?hl=en"><img src="iglogo.png" alt="Logo 1" class="logo-f"></a>
       <a href="https://www.facebook.com/nokia/"><img src="fblogo.png" alt="Logo 2" class="logo-f"></a>
      <a href="https://twitter.com/nokia"><img src="twlogo.png" alt="Logo 3" class="logo-f"></a>
        
        
    </div>
  </div>

  
  <div class="right-division">
    <form class="form" id="contactForm" action="#" method="post" onsubmit="return validate();">
      <h1 class="formhead">Want to send us a message?</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"  autocomplete="off">
      <small id="nameError" class="error"></small>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  autocomplete="off">
      <small id="emailError" class="error"></small>
      <label for="message">Message:</label>
      <textarea id="message" name="message" autocomplete="off"> </textarea>
      <input type="submit" value="Send">
    </form>
  </div>

</section>

<footer class="contactfoot">
  <p class="copyright">Copyright © 2023 Nokia. All rights reserved.</p>
</footer>
</body>
</html>

