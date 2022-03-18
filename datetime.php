<?php 
$title ="date time";
include 'includes/header.php';


?>
    <h1>date and Time </h1>
    
    <?php
    date_default_timezone_set('Asia/Beirut');


    //we want to get a time now
    //this will get the time of the machine working on it 
    //the getdate function will return an array 
   $date=getdate();
   echo"Today's date <br>";
    echo $date['mday'].'<br>';
    echo $date['mon'].'<br>';
    echo $date['year'].'<br>';

    echo "Today's date :".$date['mday'].'/'.$date['mon'].'/'.$date['year'].'<br>';
    echo time().'<br>';

    print date("m/d/y G.i:s<br>",time()).'<br>';

    print "today is ";
    print date ("l F j o , \a\\t g.i a",time());




    ?>
    <?php
    require 'includes/footer.php' ;
     ?>