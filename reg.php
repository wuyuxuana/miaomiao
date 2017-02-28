<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>注册</title>
    <link rel="stylesheet" href="styles/public.css"/>
    <link rel="stylesheet" href="styles/reg.css"/>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/reg.js"></script>
    <script>
    /*function loadXMLDoc(str)
	{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("yzm_01").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("POST","register.php?username=" + $("#username").val(),true);
	xmlhttp.send();
	}*/
    </script>
</head>
<body>
<div class="reg_top">
        <div class="comWidth clearfix">
            <span class="reg_top_l">喵喵一下&nbsp即刻出发</span>
            <span class="reg_top_r">已有喵喵账号，<a href="login.php">登录</a></span>
        </div>
    </div>
<div class="reg_bottom">
    <div class="signup comWidth">
        <div class="signup_box">
            <h1>现在赶紧加入我们</h1>
            <form action="doUserAction.php?act=signUser" method="post" >
                <dl class="item">
                    <dt>用户名：</dt>
                    <dd class="fl">
                        <input class="box" placeholder="请输入用户名" type="text"  id="username" name="username" onchange="loadXMLDoc(this.value)" />
                        <p class="box_xb">6~18个字符，以字母开头</p>
                    </dd>
                    <div class="yzm" id="yzm_01"></div>
                </dl>
                <dl class="item">
                    <dt>邮箱：</dt>
                    <dd class="fl">
                        <input class="box" placeholder="请输入邮箱账号" type="email" id="email" name="email" onblur="check"/>
                        <p class="box_xb"></p>
                    </dd>
                    <div class="yzm" id="yzm_02"></div>
                </dl>
                <dl class="item">
                    <dt>密码：</dt>
                    <dd class="fl">
                        <input class="box" placeholder="请输入密码" type="password" id="password" name="password"/>
                        <p class="box_xb">6~20个数字或字母组合</p>
                    </dd>
                    <div class="yzm" id="yzm_03"></div>
                </dl>
                <dl class="item">
                    <dt>确认密码：</dt>
                    <dd class="fl">
                        <input class="box" placeholder="确认密码" id="password_02" type="password" name="password_02 />
                        <p class="box_xb"></p>
                    </dd>
                    <div class="yzm" id="yzm_04"></div>
                </dl>
                <dl class="item">
                    <dt>验证码：</dt>
                    <dd class="fl">
                        <input class="box_yz" type="text"/>
                    </dd>
                    <div class="yz"><a href="#" id="changeimg">换一下</a><img id="code" src="user/getVerify.php" title="验证码"/></div>
                    <div class="yzm" id="yzm_05"></div>
                </dl>
                <input  class="submit" value="注册" type="submit" onclick="return false"/>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
    	$("#changeimg").click(function(){
			$(".yz #code").attr('src','user/getVerify.php?'+Math.random());
        });
    });


</script>
<script>
  function picreload(){
    var change=document.getElementById('check');
    change.src="Check_code.php?"+Math.random();
  }
</script>




</body>
</html>
