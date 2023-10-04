<?php


function sumEvenNumbers($num){
  $j = 0;  
    for($i = 0; $i <= $num; $i++){
        
        if($i % 2 == 0){
                    
          $j += $i;
          
         
           
        }  
    } 
  print_r($j);    
}

sumEvenNumbers(6);