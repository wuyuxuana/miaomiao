<?php
require_once 'include.php';
function check_reg_user(){
    $username=$_GET["username"];
    $sql="SELECT * FROM miao_user WHERE username='{$username}'";
    $rows=fetchOne($sql);
    if(strlen($username)==0){
        echo "*用户名不能为空";
        return false;
    }else if($rows){
        echo"*用户名已存在";
        return false;
    }else if(strlen($username)<6||strlen($username)>18){
        echo"*用户名为6~18位";
        return false;
    }else {
        echo "√";
    }
}
function check_reg_email(){
    $email=$_GET["email"];
    $sql="SELECT * FROM miao_user WHERE email='{$email}'";
    $rows=fetchOne($sql);
    if(strlen($email)==0){
        echo "*邮箱不能为空";
        return false;
    }else if($rows){
        echo"*邮箱已存在";
        return false;
    }else if(strlen($email)<6||strlen($email)>20){
        echo"*邮箱为6~20位";
        return false;
    }
}
function check_reg_pwd(){
    $password=$_GET["password"];
    if(strlen($password)==0){
        echo "*密码不能为空";
        return false;
    }else if(strlen($password)<6||strlen($password)>20){
        echo"*密码为6~s20位";
        return false;
    }else {
        global  $a1;
        $a1=1;
    }
}
// function check_reg_pwd_02(){
//     $password=$_GET["password"];
//     $password_02=$_GET["password_02"];
//     echo $password;
//     echo $password;
//     if(strlen($password_02)==0){
//         echo "*密码不能为空";
//         return false;
//     }else if(strlen($password_02)<6||strlen($password_02)>20){
//         echo"*密码为6~20位";
//         return false;
//     }
// }
if(!empty($_GET["username"])){
    check_reg_user();
}else if(!empty($_GET["email"])){
    check_reg_email();
}else if(!empty($_GET["password"])){
    check_reg_pwd();
}else if(!empty($_GET["password_02"])){
    check_reg_pwd_02();
}






//echo "<script>check(username)</script>";

?>
