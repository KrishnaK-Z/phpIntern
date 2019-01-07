<html>
<style>
body{
    padding: 0;
    margin:0;
    
}
.main{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 500px;
    background-color: #f2f2f2;
    padding: 30px;
    border-radius: 10px;
}
input[type="text"], input[type="password"], select{
    width: 100%;
    padding: 20px 12px;
    margin : 8px 0;
    color: #000;
    border: none;
    background-color: #55555C;
    outline: none;
    background: #eee;
}
input[type="submit"]{
    width: 100%;
    border: none;
    outline: none;
    padding: 20px 12px;
    margin :18px 0;
    color: #fff;
    background-color: #ff0000;
    cursor: pointer;
}
</style>
<body>
<?php $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
<div class="main">
<form action="" method="GET" >
<div>
<label for="act">Log In using</label>
<select name="act">
<option value="choose">Choose</option>
<option value="facebook" <?php if(strpos($url,"act=facebook")) echo 'selected="selected"'?> >FACEBOOK</option>
<option value="google" <?php if(strpos($url,"act=google")) echo 'selected="selected"'?>>GOOGLE</option>
<option value="twitter" <?php if(strpos($url,"act=twitter")) echo 'selected="selected"'?>>TWITTER</option>
</select>
</div>
<div>
<label for="name">User Name</label>
<input type="text" name="name">
</div>
<div>
<label for="pswd">Password</label>
<input type="password" name="pswd">
</div>
<div>
<input type="submit" name="submit" value="SUBMIT">
</div>
</form>
</div>
<?php
    $name = $_GET['name'];
    $pass = $_GET['pswd'];
    $account = $_GET['act'];

    interface Logsys{
    public function phpAlert($msg);
    }
    
    class Face implements Logsys{
    public function phpAlert($msg){
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    }
    
    class Google implements Logsys{
    public function phpAlert($msg) { 
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    }
    
    class Twit implements Logsys{
    public function phpAlert($msg) { 
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    }

    if(isset($_GET['submit'])){
        if(empty($name) || empty($pass) ){
            echo "Field empty";
        }
        else{
            
            
            if(strpos($url,"act=facebook")){
                $res = new Face();
                $res->phpAlert("Facebook logged on");
            }
            else if(strpos($url,"act=google")){
                $res = new Google();
                $res->phpAlert("Google logged on");
            }
            else if(strpos($url,"act=twitter")){
                $res = new Twit();
                $res->phpAlert("Twitter logged on");
            }

            else {
                echo '<script type="text/javascript">alert("FAIL!!!")</script>';
            }
            
        }
    }
    
?>
</body>

</html>
