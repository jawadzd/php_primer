<?php 
$title ="strings";
include 'includes/header.php';


?>
    <h1>Strings </h1>
    <?php
   $phrase1="Students who came late";
   $phrase2="in class sit the rock";
   $name =" jawad zeyneddin";

   echo '<p>'.$phrase1.'</p>';
   echo '<p>'.$phrase2.'</p>';
   echo '<h2>string transformation </h2>';
   echo '<hr>';
   //concatenation is to join 2 srings together 
   echo $phrase1 ." did not get " . $phrase2;// i added a string between the 2 phrases i had
   //this function upper case the first letter in the string 
   echo '<br>'.'Uppercase first letter :'.ucfirst($name);
   echo '<br>'.'Uppercase first letter of each word :'.ucwords($name);
   echo '<br>'.'Uppercase all letters :'.strtoupper($name);
   echo '<br>'.'lowercase all letters :'.strtolower($name);
   echo '<hr>';
   echo '<br>'.'Repeated String  '.'<br>'.str_repeat($name,5).'<br>';
   //you can conjugate functions together 
   echo '<br>'.'Repeated String  '.'<br>'.str_repeat(strtoupper($name),5).'<br>';
   echo 'get a substring '.substr($name ,6,11).'<br>';
   echo 'get postion of string'.strpos($name,'i').'<br>';
// find the character 
   echo 'find character I; '.strchr($name,'i').'<br>';
   //get the length of the string 
   echo'the length is'.strlen($name).'<br>';

   //type a string while removing spaces 
   echo 'trim on both sides '.'A'.trim(" B C D ").'E'.'<br>';
   echo 'trim on left sides '.'A'.ltrim(" B C D ").'E'.'<br>';
   echo 'trim on right sides '.'A'.rtrim(" B C D ").'E'.'<br>';

   //replace string with another

   echo 'replace strings :'.str_replace("sit","stand",$phrase2).'<br>';




   


?>
<?php
   require 'includes/footer.php' ;
    ?>