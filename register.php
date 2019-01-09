<html>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<form action="include/signup.php" method="POST" enctype="multipart/form-data" class="grid">

<div class="grid_item">
<div class="input_label">First Name *</div>
<input type="text" name="fname" class="input_box">
<div class="error">
<?php
if(isset($_GET['field']))
echo "Check the field";
?>
</div>
</div>

<div class="grid_item">
<div class="input_label">Last Name *</div>
<input type="text" name="lname" class="input_box">
<div class="error"> 
<?php
if(isset($_GET['field']))
echo "Check the field";
?>
</div>
</div>

<div class="grid_item">
<div class="image"><img src="up_pics/default_pic.jpg"></div>
<input type="file" name="file" accept="image"><br/>
<div class="error"> 
</div>
</div>

<div class="grid_item">
<div class="input_label"> Gender *</div>
<select name="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select>

<div class="input_label" style="margin: 1rem 0 0 0;">Status</div>
<select name="status">
<option value="employee">working</option>
<option value="intern">intern</option>
</select>

</div>

<div class="grid_item full_part">
<div class="input_label">E-Mail *</div>
<input type="email" name="logmail" class="input_box">
<div class="error"> 
<?php
if(isset($_GET['field']))
echo "Check the field";
?>
</div>
</div>


<div class="grid_item">
<div class="input_label">Password *</div>
<input type="password" name="authpass" class="input_box">
<div class="error"> </div>
<?php
if(isset($_GET['field']))
echo "Check the field";
?>
</div>

<div class="grid_item">
<div class="input_label">Confirm Password *</div>
<input type="password" name="confpass" class="input_box"><br/>
<div class="error"> 
<?php
if(isset($_GET['passconfirm']))
echo "Password doesn't match";
?>
</div>


</div>

<div class="grid_item full_part" style="justify-content: center;">
<button type="submit" name="logon" class="grid_item log_btn">Log On</button>
</div>

</form>

</body>
</html>
