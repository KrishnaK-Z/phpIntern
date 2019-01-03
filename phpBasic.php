<html>

<body>
<form action="" method="get">
<input type="text" name="number1"><br/>
<input type="text" name="number2"><br/>
<input type="submit" value="submit">
</form>

<?php

$num1 = $_GET["number1"];
$num2 = $_GET["number2"];


function arrayFunction(){
echo"<h1>Single Dimmention</h1>";
$suzuki = array("Access" , "inruder" , "gixxer" , "street");
$yamaha = array("fz" , "r3" , "r1" , "r6");

$bmw = array("s1000rr"=>"16lk", "cb650f"=>"7lk" ,"cbr250r"=>"3.5lak");

foreach($bmw as $x => $x_val){
echo"<p>The cost of ".$x." is ".$x_val."<p><br/>";
}

$suzuki_cnt = count($suzuki);
for($x=0; $x < $suzuki_cnt; $x++){
echo"<p>".$suzuki[$x]."</p>";
}


$suzuki[2] = "GSF";
echo"<h2>The changed array</h2>";
$suzuki_cnt = count($suzuki);
for($x=0; $x < $suzuki_cnt; $x++){
echo"<p>".$suzuki[$x]."</p>";
}

echo "<p>The reverse of the array</p>";
$yacnt=count($yamaha);
for($x=$yacnt-1;$x>=0;$x--)
echo"<p>".$yamaha[$x]."</p>";

ksort($bmw);
echo "<p>Oredered by price</p>";
foreach($bmw as $x => $x_val){
echo"<p>The cost of ".$x." is ".$x_val."<p><br/>";
}
}

function addition ($x,$y){
$z= $x + $y;
echo"<h1>The addition of two numbers</h1>";
echo"<p>".$z."</p>";
}

function string_length($str){
echo"<h1>The Length of the string</h1>";
echo"<p>".strlen($str)."</p>";
}

function string_reverse($str){
echo"<h1>The reverse of the string</h1>";
echo"<p>".strrev($str)."</p>";
}

function string_replace($replace,$with,$stmt){
echo"<h1>The replace function of the string</h1>";
echo"<p>".str_replace($replace,$with,$stmt)."</p>";
}

function whloop($num1,$num2){
echo"<h1>Using the while loop</h1>";
while($num2>0){
$num1+=$num1;
$num2--;
}
echo"<p>The result is" .$num1."</p>";
}

function doloop($num1,$num2){
do{
$num1+=$num1;
$num2--;
}while($num2>0);
echo "<h1>The do while loop </h1>";
echo "<p>The result is ".$num1."</p>";
}

function evenodd($num){
echo "<h1>The odd and even function</h1>";
if($num%2==0)
echo"<p>".$num."is even</p>";
else
echo"<p>".$num."is odd</p>";
}

function castInt($num){
echo "<h1>The typecasting</h1>";
echo "<p> The integer value is ".(int)$num."</p>";
}

$sam = "Zilker Technology is in Tnagar";
string_length($sam);
string_reverse($sam);
string_replace("Tnagar","westSaidapet",$sam);
addition($num1,$num2);
whloop($num1,$num2);
doloop($num1,$num2);
evenodd($num1);
arrayFunction();
castInt(10.2);
?>
</body>
</html>

