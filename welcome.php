<html>

<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-collapse: collapse;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
  margin : 2rem 0;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Profile picture</th>
    <th>Gender</th>
    <th>email</th>
    <th>status</th>
  </tr>

  <?php
include_once('include/connect.php');
$obj = new dbconnect();

$obj->showData();
?>
  
</table>

</body>

</html>