<?php
require_once 'include.php';
checkLogined();
$username=$_SESSION['userName'];
$sql_01="select * from miao_user where username='$username'";
$state=fetchOne($sql_01);
$state['albumPath']?$state['albumPath']:"1";
// var_dump($state);
$sql_02="select * from miao_mes where Uid='$username'";
$num=getResultNum($sql_02);
$state['num']=$num;
$state['albumPath']=$state['albumPath']?$state['albumPath']:"tx";
@$order=$_REQUEST['order']?$_REQUEST['order']:null;
@$orderBy=$order?"order by p.".$order:null;
@$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?"where p.pName like '%{$keywords}%'":null;
//得到数据库中所有状态
// $_SESSION['userName'];
$sql="select * from miao_mes order by Utime desc {$where} ";
$totalRows=getResultNum($sql);
$pageSize=8;
$totalPage=ceil($totalRows/$pageSize);
@$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select  miao_mes.id,Uid,Ucontent,Utime,albumPath from miao_mes,miao_user where miao_mes.Uid=miao_user.username order by Utime desc {$where}  {$orderBy} limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
// miao_mes.id,Uid,Ucontent,Utime,albumPath from miao_mes,miao_user
//  var_dump($rows);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" ;charset=utf-8/>
    <title>喵喵一下&nbsp即刻出发</title>
    <link rel="stylesheet" href="styles/public.css"/>
    <link rel="stylesheet" href="styles/index.css"/>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/nav.js"></script>
    <script src="scripts/publish.js"></script>
</head>
<body>
<div class="nav">
    <div class="comWidth ">
        <div class="nav_l fl">
            <ul>
                <li><a class="nav_l_01" href="index.php">首页</a></li>
                <li><a class="nav_l_02" href="geren.php">我的主页</a></li>
                <li><a class="nav_l_03" href="">留言板</a></li>
                <li><a class="nav_l_03" href="">我的朋友</a></li>
            </ul>
        </div>
        <div class="zl">
            <a  href="#"><img  src="images/nav_tx.png"></a><a style="text-indent: 10px;" href="">喵喵</a>
        </div>
        <div class="nav_r">
            <form action="" method="get">
                <div class="nav_ss">
                    <input class="nav_ss_text"  type="text">
                    <input class="nav_ss_bt" type="button" value="">
                </div>
            </form>
            <div class="nav_sz">
                <span><img src="images/nav_dw.png" alt=""/></span>
                <a class="nav_sz_01" href="">
                    <img src="images/nav_sz_01.png" alt=""><img id="nav_sz_jt" src="images/nav_sz_x_01.png" alt="">
                </a>
                <div id="nav_sz_xl">
                    <dl><a href="doUserAction.php?act=logout" >退出</a></dl>
                    <dt></dt>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="center clearfix">
    <div class="comWidth">
        <div class="center_com">
            <div class="center_l">
                <div class="center_l_01">
                    <dl class="center_l_01_t">
                        <a class="center_l_tx" href=""><img src="images_tx/<?php echo $state['albumPath']?>.jpg" alt=""/></a>
                        <div class="center_l_zt">
                            <span><a class="center_l_zt_01" href=""><?php echo $state['username'];?></a></span>
                            <span class="center_l_zt_02">dd萨达萨达按时 阿d萨达萨达按时 阿d萨达萨达按时 d萨达萨达按时 阿d萨达萨达按时 阿d萨达萨达按时 d萨达萨达按时 阿d萨达萨达按时 阿d萨达萨达按时 阿达 dd</span>
                        </div>
                    </dl>
                    <ul class="center_l_01_c">
                        <li class="center_l_c_zt"><a href="geren.php" target="_self"><?php echo $state['num'];?></a>:状态</li>
                        <li class="center_l_c_zt"><a href="">3</a>:照片</li>
                        <li class="center_l_c_py"><a href="">3</a>:粉丝</li>
                    </ul>
                    <dd></dd>
                </div>
                <div class="center_l_02">

                </div>
                <div class="center_l_03"> </div>
            </div>
            <div class="center_c">
                <div class="center_c_01">
                    <div class="publish">
                        <form action="doUserAction.php?act=pub_zt" method="post">
                            <div class="publish_01">一起记录我们的点滴生活吧！</div>
                            <textarea type="text" placeholder="每一天有你更温暖" class="publish_02" id="publish_02"  name="Ucontent" ></textarea>
                            <div class="publish_03">
                                <input type="file"  multiple value="22" class="publish_file" />
                                <dt>121232</dt>
                            </div>
                            <div class="publish_lx">
                                <ul class="publish_ff ">
                                    <li id="publish_ff_01"><a href="#" title="发状态" ><img src="images/icons/icon_1.png">发状态</a></li>
                                    <li id="publish_ff_02"><a href="#" title="发图文" ><img src="images/icons/icon_2.png">发图文</a></li>
                                </ul>
                                <input type="submit" value="记录" class="submit"  onMouseOver="this.style.color='#f2efe9'" onMouseOut="this.style.color='#FFF'">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="center_c_02">
                    <div class="center_c_02_zt">
                        <p style="color: #777777;font-size: 16px;font-weight: 700;">喵喵一下 即刻出发</p>
                    </div>
                        <?php foreach($rows as $row):?>
                        <div class="state">
                            <div class="state_top">
                                <div class="state_top_tx ">
                                    <a href=""><img width="50px" height="50px" src="images_tx/<?php echo $row['albumPath'];?>.jpg" title="你好" alt=""></a>
                                 </div>
                                <div class="state_top_wz">
                                    <a  class="fl" href="#"><?php echo $row['Uid'];?></a>
                                    <span ><?php echo date("m-d H:i",$row['Utime']);?></span>
                                 </div>
                            </div>
                            <div class="state_bottom">
                                <?php echo $row['Ucontent'];?>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <?php if($totalRows>$pageSize):?>
                        <tr>
                        	<td colspan="7">&nbsp&nbsp&nbsp&nbsp<?php echo showPage($page, $totalPage,"keywords={$keywords}&order={$order}");?></td>
                        </tr>
                        <?php endif;?>
                    </div>
                </div>
            <div class="center_r">
                <div class="center_r_01">
                    <video width="200px" height="180px" controls="controls">
                    <source src="1.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="center_r_02"> </div>
            </div>
        </div>
    </div>
</div>
<div class="footer"></div>


</body>
</html>
