<?php
    if(empty($_POST["username"])){
        die("<script>alert('用户名不能为空！');history.go(-1);</script>");
    }
    if(empty($_POST["account"])){
        die("<script>alert('账号不能为空！');history.go(-1);</script>");
    }
    
    if(strlen($_POST["password"]) < 8){
        die("<script>alert('密码不能小于8位！');history.go(-1);</script>");
    }
    
    if($_POST["password"] !== $_POST["password_again"]){
        die("<script>alert('两次密码输入不一致！');history.go(-1);</script>");
    }
    
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("<script>alert('请输入有效邮箱格式！');history.go(-1);</script>");
    }
    
    $username = $_POST["username"];
    $account = $_POST["account"];
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_POST["email"];
    
    $mysqli = new mysqli("localhost", "user", "051118WBxingmeng", "user");
    if($mysqli->connect_errno){
        die("error". $mysqli->mysqli_connect_errno);
    }
    
    if(isset($_POST["register"])){
        $sql = "INSERT INTO user (username, account, email, password_hash) VALUES ('$username', '$account', '$email', '$password_hash')";
        $mysqli->query($sql);
        
        if($mysqli->affected_rows > 0){
            echo "<script>alert('注册成功，马上为您跳转登录页面！');window.location.href = 'log_in.html';</script>";
        }
    }
?>