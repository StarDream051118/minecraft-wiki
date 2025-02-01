<?php
    $mysqli = new mysqli("localhost", "user", "051118WBxingmeng", "user");
    if($mysqli->connect_errno){
        die("error". $mysqli->mysqli_connect_errno);
    }
    
    $account = $_POST["account"];
    $password = $_POST["password"];
    
    if(isset($_POST["login"])){
        $sql = "SELECT password_hash, username FROM user WHERE account='$account'";
        $res = $mysqli->query($sql)->fetch_assoc();
        
        if($res){
            if(password_verify($_POST["password"], $res["password_hash"])){
                echo "<script>window.location.href='questionnaire.php?username={$res['username']}';</script>";
            }
            else{
                echo "<script>alert('密码输入错误！');history.go(-1);</script>";
            }
        }
        else{
            echo "<script>alert('用户不存在！');history.go(-1);</script>";
        }
    }
?>