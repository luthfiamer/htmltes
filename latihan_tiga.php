<?php

 $MIN_VALUE=200;

    $nilai=array(23,7,3,8,99,20);
    for( $i=0 ; $i < count($nilai) ; $i++ ) {
                print "$nilai[$i] - " ;
             if($nilai[$i] < $MIN_VALUE) {
                 $MIN_VALUE = $nilai[$i];
             }
    }
    echo "<br />Bilangan Terkecilnya = ".$MIN_VALUE;
    

?>