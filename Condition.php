<?php
   $one =290;
   $two =29000;
   $three =2900;

   if($one>$two){
   if($one>$three){
    echo "ONE";
   }
   else{
    echo "THREE";
   }
   }
   else if($one<$two){
    if($two>$three){
    echo "TWO";
   }
   else{
    echo "THREE";
   }
   }
   else{
    echo"Equal";
   }
?>
