<?php 
include 'connection.php';
session_start();
if (isset($_SESSION['username']))
{
  ?>
  <script>
    window.location.header = url;
  </script>
  <?php
    // header("location:".$url."index.php");
    // exit();
}
?>
<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>KNK</title>
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- <link rel="stylesheet" href="css/style2.css"> -->
    </head>

    <body>
<div class="container">
    <h2 class="login-title">Log in</h2>

    <form class="login-form" method="post" >
      <div>
        <label for="name">User Name </label>
        <input
               id="name"
               type="text"
               placeholder="Enter User Name"
               name="username"
               required
               />
      </div>

      <div>
        <label for="password">Password </label>
        <input
               id="password"
               type="password"
               placeholder="password"
               name="password"
               required
               />
      </div>
            <input type="submit" name="login" value="Login " class="btn btn--form">

    </form>
</div>
 
    </body>
</html>
<?php

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    if (empty($_POST['username']) || empty($_POST['password']))
    {
    ?>
      <script>
      alert('please enter username and password');    
      window.header.location($url+"login.php");

        </script>
    <?php
      }
    else
    {
        $login = "select * from user where username = '$username' and password = '$password'";
// echo $login;
        $reslogin = mysqli_query($conn,$login) or die("unsucess to connect");
        if (mysqli_num_rows($reslogin) > 0) {
            $_SESSION['username'] = $username;
            // header('Location :'.$url);
            // exit(); 
            ?>
      <script>
        window.location.href = url;
    </script>

 <?php    
        }
        else
        {
          ?>
            <script>
              alert("Please Enter Correct User Name And Password");
        // window.location.href = url;
            </script>
            <?php

        }
    }
}
?>