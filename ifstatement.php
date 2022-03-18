<?php 
$title ="ifstatment";
include 'includes/header.php';


?>
    <?php 
    //working with if statment
    echo "<h1>if statements</h1>";
    $grade = 60; 

    if($grade >= 50){
        echo '<h3 style="color : green">You have passed</h3>';
    }
    else{
        echo '<h3 style="color : green">You have failed</h3>';

    }
    $grade ='A';
    if($grade == 'A' || $grade == 'A+'){
        echo '<h2 style="color : green" >You are super </h2>';
    }elseif ($grade=='B') {
        echo '<h2 style="color : blue">You did well </h2>';
    }else
    echo '<h2 style="color : red">You need more work </h2>';
    {}

    
    ?>
<?php
   require 'includes/footer.php' ;
    ?>