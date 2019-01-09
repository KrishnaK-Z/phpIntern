<?php
class dbconnect{
    public $conn;
    public function __construct()
    {
        include_once 'inc.php';
        $this->conn = new mysqli($server_name, $user, $pass, $db_name);
        if($this->conn->connect_error)
        {
            die("Connection failed".$this->conn->connection_error);
        }

    }

    public function finish()
    {
        $this->conn->close();
    }


    public function checkAvail($uemail)
    {
        $reg_sql = "SELECT email FROM user WHERE email = ?;";
        $stmt = $this->conn->prepare($reg_sql);
        if(!$stmt)
        {

        }
        else
        {
            $stmt->bind_param("s",$uemail);
            $stmt->execute();
            $result = $stmt->get_result();
            $cnt = $result->num_rows;
            if($cnt > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        $stmt->free_result();
        $stmt->close();
    }

    public function signup($fname,$lname,$profile_pic,$gender,$email,$status,$password,$act_ext)
    {  

        $args = func_get_args();
        if($act_ext != null)
        $save_pic_name = '../up_pics/'.$fname.'.'.$act_ext;
        else
        $save_pic_name = '../up_pics/default_pic.jpg';
        
        $reg_insert = "INSERT INTO user (fname,lname,profile_pic,gender,email,stat,pswd) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($reg_insert);
        if(!$stmt)
        {
            header("location: ../register.php?error=connecterror");
            $stmt->close();
            exit();
        }
        else
        {
            move_uploaded_file($profile_pic, $save_pic_name);
            $stmt->bind_param("sssssss", $fname, $lname, $save_pic_name, $gender, $email, $status, $password );
            $stmt->execute();
            $stmt->close();
            header("location: ../login.php?register=success");
            exit();
        }

    }

    public function login($email,$password)
    {
        $select_query = "select email, pswd from user where email=? and pswd=?";
        $stmt = $this->conn->prepare($select_query);
        
        echo $password;
        if(!$stmt)
        {

        }
        else
        {
            $stmt->bind_param('ss',$email,$password);
            $stmt->execute();
            $result = $stmt->get_result();
            $cnt = $result->num_rows;
            if($cnt == 1)
            {
                while($row = $result->fetch_assoc())
                {
                    session_start();
                    $_SESSION['user_name']=$row['fname'];
                    header("location: ../welcome.php");
                    exit();
                }
            }
            else
            {
                header("location: ../login.php?error=incorrect");
                exit();
            }

        }
        $stmt->free_result();
        $stmt->close();
    }

    public function showData()
    {
        $show_query = "select * from user";
        $stmt = $this->conn->prepare($show_query);
        if(!$stmt)
        {
            header("location: ../register.php?error=occured");
            exit();
        }
        else
        {
            $stmt->execute();
            $result = $stmt->get_result();
            
            if($result->num_rows == 0)
            {
                echo "No Results Found";
            }
            else
            {
                while($row = $result->fetch_assoc())
                {
                    echo "
                    <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['fname']."</td>
                    <td>".$row['lname']."</td>
                    <td> <img src=  '".$row['profile_pic']."' style='width:100px;height:120px;'> </td>
                    <td>".$row['gender']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['stat']."</td>
                    </tr>
                    ";
                }
            }
        }
        $stmt->free_result();
        $stmt->close();
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destry();
        header("location: ../register.php");
    }

    public function get_status()
    {
        return $_SESSION['username'];
    }

}
?>