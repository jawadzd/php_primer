<?php 
$title ="functions";
include 'includes/header.php';


?>
  <h1>Functions</h1>

  <?php
   //defining a function

   function  writemessage(){
       echo "you are a nice person <br>";
       echo "<hr>";
    }

    //calling the function

    writemessage();
    $num=100;
    writemessage();

    //function with parametres

    function addFunction($num1 ,$num2){
        $sum = $num1 + $num2 ;
        echo "the sum of $num1 and $num2 is $sum";
        echo "<hr>";
    }

    addFunction(3,5);

    function changenum(&$num){
        $num = $num +10;
    }

    //so to pass the number by value just using $num
    //nothing will change to the variable itself
    //but passing by reference using &$num will 
    //lead to a real change in the variable value 
    //like pointer in c
    changenum($num);
    echo $num;
    echo "<br>";

    function calc($n1,$n2){
        return $n1+$n2;
    }

    echo calc(3,4);


  ?>
  
  <?php
   require 'includes/footer.php' ;
    ?>