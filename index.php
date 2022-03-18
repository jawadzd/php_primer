<?php 
$title ="functions";
include 'includes/header.php';


?>
    <!-- basic html  -->
    <h1>Hello HTML - PHP primer </h1> 
    <!-- this is the way to get a space between lines -->
    <br/>

    <?php 
    //printing by php
    echo 'Hello php ';
    //to do so in php you use the same html command but 
    //inside the echo php command 
    echo '<br/>';
    echo 'bonjour php';
      echo '<br/>';
      $fname = 'Jawad ';
      $lname = 'Zeyneddin';

      $age =20;
      echo $fname;
      echo $lname;

      echo "<h1>My first name is :".$fname." </h1>";
      echo "<h1>My last name is :$lname</h1>";
      echo "<h1>My age is :".$age." </h1>";
    ?>

<button type="button" class="btn btn-primary">CLICK ME!</button>


    <?php
   require 'includes/footer.php' ;
    ?>

   