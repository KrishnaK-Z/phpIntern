<html>
<style>
body{
margin:0;
padding:0;
}

#main{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 500px;
background: #eee;
padding: 50px;
border-radius: 10px;
box-shadow: 10px 10px 5px #aaaaaa;
}

input[type="number"],select{
width: 100%;
background-color: #ddd;
color: #eee;
margin: 10px 0;
padding: 20px;
color: #000;
outline: none;
border-radius: 5px;
}
input[type="submit"]{
width: 100%;
margin: 10px 0;
background-color:  #ff0000;
color: #fff;
border: none;
border-radius: 5px;
outline: none;
cursor: pointer;
padding: 14px 20px;
}
input[type="submit"]:hover{
background-color:  #cc0000;
}
#ans{
position: relative;
left: 50%;
transform : translate(-50%,0);
width: 100%;
text-align: center;
color: #fff;
background: #ff8c1a;
padding: 20px;
margin: 10px 0;
border-radius: 10px;
}
#ans:hover{
background: #cc7a00;
}

</style>
<body>
<?php
class Calculation
{

public $result;
public $a,$b;
function add($a,$b){
$this->result = $a+$b;
}

function sub($a,$b){
$this->result = $a - $b;
}

function div($a,$b){
$this->result = $a/$b;
}

function mul($a,$b){
$this->result = $a*$b;
}

}
?>
<div id="main">
<form action="" method="POST">

<div>
<label for="num1">First Number</label>
<input type=number name="num1">
</div>

<div>
<label for="num1">Second Number</label>
<input type=number name="num2">
</div>

<div>
<label for="operation">Select the operation</label>
<select  name="operation">
<option value="add">Addition</option>
<option value="sub">Subtraction</option>
<option value="mul">Multiplication</option>
<option value="div">Division</option>
</select>
</div>

<div>
<input type="submit" name="calculate" value="CALCULATE">
</div>

</form>

<?php
if(isset($_POST['calculate'])){
$obj = new Calculation();
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$opt = $_POST['operation'];
if(empty($n1) or empty($n2)){
echo "<div>Fields are empty</div>";
}
else{
switch($opt){
case 'add':
$obj->add($n1,$n2);
echo "<div id='ans'>".$obj->result."</div>";
break;

case "sub":
$obj->sub($n1,$n2);
echo "<div id='ans'>".$obj->result."</div>";
break;

case "mul":
$obj->mul($n1,$n2);
echo "<div id='ans'>".$obj->result."</div>";
break;

case "div":
$obj->div($n1,$n2);
echo "<div id='ans'>".$obj->result."</div>";
break;
}

}

}
?>

</div>


</body>
</html>
