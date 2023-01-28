<?php
include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
 
  <title>Student Information</title>
  <style type="text/css">
    .search
     {
      padding-left: 500px;
     }

  </style>
</head>
<body>
  <!-------------------------serach bar---------------------->
  <div class="search">
    <form class="navbar-form" method="post" name="form1">
     
        <input class="form-control" type="text" name="search" placeholder="Student username.." required="">
        <button style="background-color: red;" type="submit" name="submit" class="btn btn-default">
          
        </button>
      

    </form>
  </div>
  <h1>List of Students</h1>
  <?php
  if(isset($_POST['submit']))
  {
    $q = mysqli_query($db, "SELECT first,last,username,roll,email,contact FROM `student` where username like '%$_POST[search]%' ");

    if(mysqli_num_rows($q)==0)
    {
      echo "Sorry! Studenti nuk u gjet, ju lutem provoni ndonje tjeter.";
    }
    else
    {
      echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:white;'>";
//Table header
   echo "<th>";     echo "First Name";              echo "</th>";
   echo "<th>";     echo "Last Name";     echo "</th>"; 
   echo "<th>";     echo "Username";   echo "</th>";
   echo "<th>";     echo "Roll";       echo "</th>";
   echo "<th>";     echo "Email";         echo "</th>";
   echo "<th>";     echo "Contact";           echo "</th>";
   echo "</tr>";

  while($row=mysqli_fetch_assoc($q))
  {
    echo "<tr>";
    echo "<td>";   echo  $row['last'];   echo "</td>";
    echo "<td>";   echo $row['username'];    echo "</td>";
    echo "<td>";   echo  $row['roll'];   echo "</td>";
    echo "<td>";   echo  $row['email'];   echo "</td>";
    echo "<td>";   echo $row['contact'];    echo "</td>";
    echo "</tr>";
  }
      echo "</table>";
    }

  }

  $res = mysqli_query($db, "SELECT first,last,username,roll,email,contact FROM `student`;");

  echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:white;'>";

  echo "<th>";     echo "First Name";              echo "</th>";

   echo "<th>";     echo "Last Name";     echo "</th>"; 

   echo "<th>";     echo "Username";   echo "</th>";

   echo "<th>";     echo "Roll";       echo "</th>";

   echo "<th>";     echo "Email";         echo "</th>";

   echo "<th>";     echo "Contact";           echo "</th>";
  while($row=mysqli_fetch_assoc($res))
  {
    echo "<tr>";

      echo "<td>";
      echo $row['first'];
      echo "</td>";

    echo "<td>";   echo  $row['last'];   echo "</td>";

    echo "<td>";   echo $row['username'];    echo "</td>";

    echo "<td>";   echo  $row['roll'];   echo "</td>";

    echo "<td>";   echo  $row['email'];   echo "</td>";

    echo "<td>";   echo $row['contact'];    echo "</td>";

    echo "</tr>";
  }
  echo "</table>"
;   ?>
  
</body>
</html>