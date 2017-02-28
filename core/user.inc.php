<?php
require_once 'include.php';
/**
 * 检查是否有管理员
 * @param unknown $sql
 * @return multitype:
 */
function checkUser($sql){
    return fetchOne($sql);
}
/**
 *简称是否登录
 */
function checkLogined(){
    if(@$_SESSION["userName"]==""&&@$_COOKIE["userName"]==""){
        echo "<script>window.location='login.php';</script>";
    }
}

/**
 *简称是否登录
 */
function checkOut(){
    if(!(@$_SESSION['userId']==""&&@$_COOKIE['userId']=="")){
        echo "<script>window.location='index.php';</script>";
    }
}

/**
 * 注销管理员
 */
function logout(){
    $_SESSION=array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }
    if(isset($_COOKIE['userId'])){
        setcookie("userId","",time()-1);
    }
    if(isset($_COOKIE['userName'])){
        setcookie("userName","",time()-1);
    }
    session_destroy();
    header("location:login.php");
}
/**
 * 注册账号
 * @return string
 **/
function signUser(){
    $arr=$_POST;
    //date("Y-m-d H:i:s",$row['pubTime'])
    //     echo $arry['id'];
    $arr['password']=md5($_POST['password']);
    $arr['regTime']=time();
    $array=array(username=>$arr['username'],password=>$arr['password'],regTime=>$arr['regTime'],email=>$arr['email']);
    var_dump($array);
    if(insert("miao_user",$array)){
        $mes="<script>window.location='reglg.php';</script>";
    }else{
        $mes="<script>histroy.back();</script>";
    }
    return $mes;
}
function pub_zt(){
    $arr=$_POST;
    $arr['Utime']=time();
    $arr['Uid']=$_SESSION['userName'];
    $res=insert("miao_mes", $arr);
//     var_dump($res);
    if($res){
        $mes="<script>alert('添加成功');</script>";
    }else{
        $mes="<script>alert('添加失败');</script>";
    }
    $url="index.php";
    alertMes($mes,$url);
//    $mes="<p>添加成功</p><a href='addPro.php'>继续添加</a>|<a href='listPro.php' target='mainFrame'>查看商品列表</a>";
//     if($res&&$pid){
//       foreach ($uploadFiles as $uploadFile){
//           $arr1['pid']=$pid;
//           $arr1['albumPath']=$uploadFile['name'];
//           addAlbum($arr1);
//       }
//       $mes="<p>添加成功</p><a href='addPro.php'>继续添加</a>|<a href='listPro.php' target='mainFrame'>查看商品列表</a>";
//     }else{
//         foreach ($uploadFiles as $uploadFile){
//             if(file_exists("../image_800/".$uploadFile['name'])){
//             unlink("../image_800/".$uploadFile['name']);
//             }
//             if(file_exists("../image_50/".$uploadFile['name'])){
//                 unlink("../image_50/".$uploadFile['name']);
//             }
//             if(file_exists("../image_220/".$uploadFile['name'])){
//                 unlink("../image_220/".$uploadFile['name']);
//             }
//             if(file_exists("../image_350/".$uploadFile['name'])){
//                 unlink("../image_350/".$uploadFile['name']);
//             }
//         }
//         $mes="<p>添加失败</p><a href='addPro.php'>重新添加</a>";
//     }
//     return $mes;
}
?>