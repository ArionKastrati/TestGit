<?php
   include "connection.php";
   include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Profile</title>
    <style type="text/css">
        

    </style>
</head>
<body style="background-color:grey;">
<div class="container">
    <form action="" method="post">
        <button class="btn btn-default" style="float: right;" name="submit1">Edit</button>

    </form>
    <div class="wrapper">
        <?php
        $q=mysqli_query($db, "SELECT * FROM student where username='$_SESSION[login_user]';");
        ?>
        <h2>My profile</h2>

    </div>

</div>

    
</body>
</html>