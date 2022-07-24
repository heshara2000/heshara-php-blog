<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>

  

  


  
  

  <link rel="stylesheet" href="../css/main.css">
  
</head>
<body>

<div class="navbar">
  <ul class="navbar-list">
    <li class="navbar-links">
      <a href="../index.php">Home</a>
    </li>
    <li class="navbar-links">
        <a href="">Login</a>

    </li>
    <li class="navbar-links">
      <a href="./about-us.php">About Us</a>
    </li>
  </ul>
</div>
<h2><b>Login form</b></h2>
<form action="http://localhost:9090/php/login.php" method="get">

 <div class="img-person">
  
  <img src="../assets/img1_avatar.png" alt="Avatar" class="avatar">

 </div>
 <div class="person">
  <label for="uname"><b>username</b></label><br></br>

  <input type="text" name="uname" placeholder="Enter username" required><br><br>
  <label for="psw"><b>password</b></label><br></br>
  <input type ="password" name="psw" placeholder="Enter password" required><br><br>
  <button type="reset" value="Reset">Reset</button>&nbsp;&nbsp;

  <button type="submit" value="login">login</button>

 </div>



</form>

  
</body>
</html>