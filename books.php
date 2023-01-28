<?php
include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
 
  <title>Books</title>
  <style type="text/css">
    .search
     {
      padding-left: 500px;
     }

  </style>
</head>
<body style="background-color: grey;">
  <!-------------------------serach bar---------------------->
  <div class="search">
    <form class="navbar-form" method="post" name="form1">
     
        <input class="form-control" type="text" name="search" placeholder="search books.." required="">
        <button style="background-color: red;" type="submit" name="submit" class="btn btn-default">
          
        </button>
      

    </form>
  </div>
  <h1>List of Books</h1>
  <?php
  if(isset($_POST['submit']))
  {
    $q = mysqli_query($db, "SELECT * from books where emri like '%$_POST[search]%' ");

    if(mysqli_num_rows($q)==0)
    {
      echo "Sorry! Libri nuk u gjet, ju lutem provoni diqka tjeter ";
    }
    else
    {
      echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:white;'>";
//Table header
   echo "<th>";     echo "ID";              echo "</th>";
   echo "<th>";     echo "Emri-librit";     echo "</th>"; 
   echo "<th>";     echo "Autori-librit";   echo "</th>";
   echo "<th>";     echo "Redaktimi";       echo "</th>";
   echo "<th>";     echo "Statusi";         echo "</th>";
   echo "<th>";     echo "Libra";           echo "</th>";
   echo "<th>";     echo "Departamenti";    echo "</th>";
  echo "</tr>";

  while($row=mysqli_fetch_assoc($q))
  {
    echo "<tr>";
    echo "<td>";   echo $row['Oferta'];   echo "</td>";
    echo "<td>";   echo $row['Emri'];    echo "</td>";
    echo "<td>";   echo  $row['Autori'];   echo "</td>";
    echo "<td>";   echo $row['Redaktimi'];    echo "</td>";
    echo "<td>";   echo  $row['Statusi'];   echo "</td>";
    echo "<td>";   echo  $row['Libra'];   echo "</td>";
    echo "<td>";   echo $row['Departamenti'];    echo "</td>";

    echo "</tr>";
  }
      echo "</table>";
    }

  }

  $res = mysqli_query($db, "SELECT * FROM `books`;");

  echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:white;'>";
//Table header
   echo "<th>";     echo "ID";               echo "</th>";
   echo "<th>";     echo "Emri-librit";      echo "</th>"; 
   echo "<th>";     echo "Autori-librit";    echo "</th>";
   echo "<th>";     echo "Redaktimi";        echo "</th>";
   echo "<th>";     echo "Statusi";          echo "</th>";
   echo "<th>";     echo "Libra";            echo "</th>";
   echo "<th>";     echo "Departamenti";     echo "</th>";
  echo "</tr>";

  while($row=mysqli_fetch_assoc($res))
  {
    echo "<tr>";
    echo "<td>";   echo $row['Oferta'];   echo "</td>";
    echo "<td>";   echo $row['Emri'];    echo "</td>";
    echo "<td>";   echo  $row['Autori'];   echo "</td>";
    echo "<td>";   echo $row['Redaktimi'];    echo "</td>";
    echo "<td>";   echo  $row['Statusi'];   echo "</td>";
    echo "<td>";   echo  $row['Libra'];   echo "</td>";
    echo "<td>";   echo $row['Departamenti'];    echo "</td>";

    echo "</tr>";
  }
  echo "</table>"
;   ?>
  
</body>
</html>