<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
       Admin Registration
    </title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <section>
        <div class="logo">

    
        
        <div class="reg_img">
        <br><br><br>
        <div class="box2" ><br>
        <h1 style="text-align: center; font-size: 40px; color: red; font-family: Lucida Console;">
        ONLINE LIBRARY </h1><br>
        <h1 style="text-align: center; font-size: 30px; color: blue;">User Registration Form </h1><br>
        <form name="Registration " action="" method="post"><br><br>
            <div class="login" style="text-align: center;"><br><br>
            <input type="text" name="first" placeholder="FirstName" required>
            <input type="text" name="last" placeholder="LastName" required>
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="text" name="email" placeholder="Email" required><br>
            <input type="text" name="contact" placeholder="phone" required><br>

            <input class="btn btn-default" type="submit" name="submit" value="Sign-Up"
             style="color: black; width: 60px; height: 30px;"></div>
            
        </form>
        
        </div>

    </section>

    <?php
    
    if(isset($_POST['submit']))
    {
        $count = 0;
        $sql="SELECT username from `admin`";
        $res=mysqli_query($db,$sql);
        

        while($row=mysqli_fetch_assoc($res))
        {
            if($row['username']==$_POST['username'])
            {
                $count=$count+1;
            }
        }
     if($count==0)
     {mysqli_query($db, "INSERT INTO `admin` VALUES('', '$_POST[first]}', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]');");
    
    ?>
     <script type="text/javascript">
        alert("Registration successful");
    </script>
   <?php
}
   else
   { ?>
    <script type="text/javascript">
       alert("The username already exist.");
   </script>
  <?php


   }
}   
   ?>
        
    </body>