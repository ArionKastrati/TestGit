<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Library
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    </head>

<body>
    <div class="wrapper">
    <header>
        <?php
        if (isset($_SESSION['login_user']))
         {
            ?>
            <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                 <li><a href="books.php">BOOKS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
           </nav>
           <?php
        }
        else
        {
            ?>
                 <nav>
                    <ul>
                      <li><a href="index.php">HOME</a></li>
                       <li><a href="books.php">BOOKS</a></li>
                      <li><a href="login.php">STUDENT-LOGIN</a></li>
                      <li><a href="feedback.php">FEEDBACK</a></li>
                    </ul>
                 </nav>

        <?php
        }

        ?>
    
      
         
       
       </header>
        
        <section>
           <img src="images/5.png" alt="zoom" height="530" width="1350">
            
            <div class="text-align center">
                <img class="mySlides w3-animate-left" src="images/15.jpg" style="width: 300px;">
                <img class="mySlides w3-animate-left" src="images/19.jpg" style="width: 300px;" >
                <img class="mySlides w3-animate-fading" src="images/17.jpg" style="width: 300px;">
                <img class="mySlides w3-animate-fading" src="images/18.jpg" style="width: 300px;">
            
            </div>
        
           <script type="text/javascript">
           
                var a=0;
                carousel();
        
                function carousel()
                {
                    var i;
                     var x= document.getElementsByClassName("mySlides")
                    
        
                     for(i=0; i<x.length; i++)
                     {
                        x[i].style.display="none";
        
                     }
        
                     a++; 
                     if(a > x.length) {a = 1}
                        x[a-1].style.display = "block";
                        setTimeout(carousel,5000);
        
        
                 }
          </script> 
           
        </section>
        <footer>
            <p style="color: red;text-align: center;">
            <br>
            Email: Online.library@gmail.com <br><br>
            Mobile: +383-44-640-206 
            </p>


        </footer>
   
    </div>
</body>
</html>
