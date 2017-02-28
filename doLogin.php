<?php
require_once 'include.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
@$autoFlag=$_SESSION['autoFlag'];
//if($verify==$verify1)
$sql="select * from miao_user where username='{$username}' and password='{$password}'";
$row=checkUser($sql);
//print_r($row);
if($row){
    if($autoFlag){
        setcookie("userId",$row['id'],time()+7*24*3600);
        setcookie("userName",$row['username'],time()+7*24*3600);
    }
    $_SESSION['userName']=$row['username'];
    $_SESSION['userId']=$row['id'];
    //header("location:index.php");
    alertMes("登录成功", "index.php");
}else{
    alertMes("登录失败，请重新登录","login.php" );
}
