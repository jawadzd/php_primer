<?php 
$title ="for loop";
include 'includes/header.php';


?>
<h1>For loops</h1>

    <?php 
    echo '<h2> we are counting till 5</h2>';
    for ($i=0; $i <5 ; $i++) { 
       
       echo '<h3>'.$i.'</h3>';
       echo'</br>';
    }
    for ($i=0; $i <5 ; $i++) { 
    echo'<p>hello world </p>';
    //the diffrence between the h and the p is that the p has an own space inside it 
    
    }

    ?>
<?php
   require 'includes/footer.php' ;
    ?>