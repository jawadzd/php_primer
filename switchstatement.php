<?php 
$title ="switchstatment";
include 'includes/header.php';


?>
    <h1>Switch statements</h1>
    <?php 
    $grade ='D';

    switch ($grade) {
        case 'A':
            echo '<h2 style="color : green" >You are super </h2>';

            break;
        case 'B':
            echo '<h2 style="color : blue" >You are great </h2>';

            break;    
        
        default:
            echo '<h2 style="color : red" >You need more work</h2>';
            break;
            
    }
    ?>
 <?php
   require 'includes/footer.php' ;
    ?>