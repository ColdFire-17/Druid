<?php


  

 function isPalindrom($string){
$resu = strrev($string); 
if ($string == $resu)  
    echo ' it's a palindrome';
else
  echo 'it's not a palindrome';}


function changeArray($array){
  $table[current($array)]=[];
foreach($array as $index=>$value){
  if(array_key_exists($value,$table)){
      $table[$value][]=$index;
       
    }
  else 
      $table[$value]=[$index]
    
 
}
  var_dump($table);
}




?>
