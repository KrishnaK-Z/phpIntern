<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;


//sorting based on the value in associative array
asort($ceu);
$cnt = count($ceu);
foreach($ceu as $s => $val){
echo "<p>The capital of ".$s." is".$val."</p>";
}


//reverse of the string
$str = "krishna";
Stemp;
for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++){
$temp = $str[$i];
$str[$i] = $str[$j];
$str[$j] = $temp;
}

echo "<p>".$str."</p>";


//inserting the element in the array
$arr = array( 1,2,3,4,5 );
array_splice( $arr, 3, 0, '$' ); 
foreach ($arr as $x) 
{echo "$x ";}
echo "<br/>";

//finding the min and max length
$strarr = array("zilker","tech","de","pvt","g","wer");
$scnt = count($strarr);
for($i=0;$i<$scnt;$i++){
$len[$i]=strlen($strarr[$i]);
}
echo "<h1>MAX </h1><p>".max($len)."</p>";
echo "<h1>MIN </h1><p>".min($len)."</p>";


//display the position of the owrd in the string
$sam = "This is my company";
echo "<p>The position is s".strpos($sam,'company')."</p>";


//capitalize the first character
$sam = "i love india";
echo "<p>Capitalize the first character ".ucfirst($sam)."</p>";


//captilize all the first character
echo "<p>Capitalize the first character ".ucwords($sam)."</p>";


//checkin the presence of the word in the string
$temp = strpos("I am boy, and 29 year old","boy");
if($temp){
echo "<p>the word is present in the string</p>";
}
else{
echo "<p>the word is not present in the string</p>";
}
?>


