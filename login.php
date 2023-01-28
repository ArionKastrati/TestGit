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
        Login
    </title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

 </header> 

 <section>
      <div class="log_img">
        <br><br><br>
        <div class="box1">
        <h1 style="text-align: center; font-size: 40px; color: red; font-family: Lucida Console;">
        ONLINE LIBRARY </h1>
        <h1 style="text-align: center; font-size: 30px; color: red;">User Login Form </h1><br>
        <form style="text-align: center;" name="login" action="" method="post">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>

            <input class="btn btn-default" type="submit" name="submit" value="Sign-Up"
             style="color: black; width: 60px; height: 30px;"></div>
            <p style="color: green;">
                <br>
               
             
            </p>
        </form>
        <script>
            var Username = /^\w+[.-_]?\+w@[a-z]+\.[a-z]{2.3}/;
            var Password = /^[A-Z]{0,1}[a-z]{4-10}/;
        </script>
        </div>

    </section>
    
    <?php
      if(isset($_POST['submit']))
      {
        $count=0;
        $res = mysqli_query($db, "SELECT * FROM `student` WHERE username='$_POST[username]' AND password='$_POST[password]';");
        $count=mysqli_num_rows($res);

        if($count==0)
        {
            ?>
           <!--
             <script type="text/javascript">
               alert("The username and password dozent match.");
            </script> 
        -->

            <div>
                <strong>The username and password dozent match </strong>
            </div>
    
            <?php
        }
         else
        {
        $_SESSION['login_user'] = $_POST['username'];
          ?>
          <script type="text/javascript">
            window.location="index.php"

          </script>

          <?php
       
        }

      }

    ?>
       
</body>
</html>