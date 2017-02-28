<?php
require_once 'include.php';
checkOut();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <title>html</title>
    <link rel="stylesheet" href="styles/public.css"/>
    <link rel="stylesheet" href="styles/login.css">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/nav.js"></script>
</head>
<body>
<div class="login" >
    <div class="login_top">
        <div class="comWidth clearfix">
            <div class="login_top_lg">
                <p>喵喵一下</p>
                <p class="login_top_lg_sj">即刻出发</p>
            </div>
        </div>
    </div>
    <div class="login_bottom" >
        <div class="comWidth">
            <div class="login_bottom_l">
                <p>点滴生活&nbsp从我记录</p>
                <form action="doLogin.php" method="post">
                        <input class="login_bottom_l_in input_jj_01" placeholder="请输入登陆账号" type="text" name="username">
                        <input class="login_bottom_l_in input_jj_02" type="password" placeholder="请输入登陆密码" name="password">
                        <div class="autoLogin">
                            <input type="checkbox"  id="checkbox" name="autoFlag" value="1"/>
                            <label  for="checkbox" >下次自动登录</label>
                        </div>
                        <div class="login_bottom_bt">
                            <input type="submit" class="login_bottom_bt_01 input_jj_03" value="登陆">
                            <input type="reset" class="login_bottom_bt_01" title="不小心输错了就让我来帮你把" value="重置">
                        </div>
                    </form>
            </div>
            <div class="login_bottom_c"></div>
            <div class="login_bottom_r">
                <p>快来注册吧！</p>
                <input class="login_bottom_bt_02" onclick="window.location='reg.php'"type="button" value="注册"/>
            </div>
        </div>
    </div>
</div>
</body>
</html>