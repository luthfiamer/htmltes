<?php
$min_value = 100;
$number = array(23, 7, 3, 8, 99, 90);
for ($i = 0; $i < count($number);$i++){
    if($i < $min_value){
        $i=$number;
    }
}
print $i;
?>