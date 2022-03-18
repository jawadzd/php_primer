<?php 
$title ="while loop";
include 'includes/header.php';


?>
    <h1>While loops </h1>
  <?php 
  $grade = 0 ;
   while($grade<10)
   {
       echo '<p>i am less than 10</P>';
       $grade++;

   }
  
  ?>    
    <h1> Do While loops </h1>
<!-- in this case the thing is done once before checking the condition -->
    <?php
    do {
        echo '<p> i am less than  10 </p>';
    
    $grade++;
} while ($grade<10);

  
  
  ?>  
<?php
   require 'includes/footer.php' ;
    ?>