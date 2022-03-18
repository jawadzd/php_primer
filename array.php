<?php 
$title ="arrays";
include 'includes/header.php';


?>
    <h1>Arrays </h1>
    <?php
    $num =3;//this is a variable 
    $numbers = array(1,2,3,4,5,6,7,8,9,10);


    echo $numbers[5];

    echo "<p>$numbers[6]</p>";

    $size = count($numbers);
    echo"<p>array size is :$size</p>";
    for ($i=0; $i < $size; $i++) { 
        echo "$numbers[$i]";
        }


    ?>
  <?php
   require 'includes/footer.php' ;
    ?>