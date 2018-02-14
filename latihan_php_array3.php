<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris", 
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", 
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => 
"Vienna", "Poland"=>"Warsaw") ;

asort ($ceu) ;

echo "the capital of $ceu[0] is $ceu[0]"

//should have an output of 
//the capital of netherlands is amsterdam

?>