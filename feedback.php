<?php
  include "navbar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
 
  <title>Feedback</title>
  <link rel="stylesheet" type="text/css" href="style.css">
       <meta charset="utf-8">
       <meta name="viewport" content="width-device-width, initial-scale=1">

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7
       /css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/
       jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
       bootstrap.min.js"></script>
       <style type="text/css">
         body
        {
          background-image: url("images/32.jpg");

        }
        .wrapper
        {
          padding: 0px;
          margin: 10px auto;
          width: 900px;
          height:600px;
          background-color: black;
          opacity: .8;
          color: white;
        }
        .form-control
        {
        height: 130px;
        width: 75%;

        }
        .scrill{
          width:100% ;
          height: 400px;
          overflow:auto;
        }
      
        
           </style>
</head>
<body>
  <div class="wrapper">
    <h1>Per gjdo paqartesi mund te pyesni.</h1>
    <form style="" action="" method="post">
       <input class="form-control" type="text" name="comment" placeholder="Write something..."><br><br>
       <input class="btn btn-default" type="submit" name="submit" value="Comment" style="whidth:100px; height:30px;">

    </form>
  <div class="scroll">
    <?php
      if(isset($_POST['submit']))
      {
      $sql = "INSERT INTO `comments` VALUES('','$_POST[comment]');";
      if(mysqli_query($db,$sql))
      {
        $q ="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
        $res = mysqli_query($db,$q);
        echo "<table class='table table-bordered'>";
        while ($row=mysqli_fetch_assoc($res))
        {
          echo "<tr>";
              echo "<td>"; echo $row['comment']; echo"</td>";
          echo "</tr>";

        }
      }
      
    }
    else{
      $q ="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
      $res = mysqli_query($db,$q);
      echo "<table class='table table-bordered'>";
      while ($row=mysqli_fetch_assoc($res))
      {
        echo "<tr>";
            echo "<td>"; echo $row['comment']; echo"</td>";
        echo "</tr>";

      }
    }

    ?>
  </div>
  </div>
</body>
</html>