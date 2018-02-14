<?php
 $start = 1;
 $end = 1000;
 $sum = 0;
 for ($i = $start; $i <= $end; $i++) {
     $sum += $i;
 }

 echo "Sum From " . $start . " to " . $end . " = " . $sum;
 ?>