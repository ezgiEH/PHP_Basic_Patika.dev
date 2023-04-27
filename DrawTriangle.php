<?php 
//A function that draws a triangle with as many rows as it takes as a parameter.  
function DrawTriangle ($count){
    $i = 1;
    while ($i <= $count) {
      for ($j = 0; $j < $i; $j++) {
        echo "*";
      }
      echo "<br>";
      $i++;
    }
}

DrawTriangle(15);

?>