<?php
include_once "./input/base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./input/css.css" rel="stylesheet" type="text/css">
<script src="./input/jquery-3.4.1.min.js"></script>
<script src="./input/js.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="index.php">
            	<img src="./img/0416.jpg">
            </a>
                            <img src="./img/0417.jpg">
                   </div>
        <div id="left" class="ct">
			<div style="min-height:400px;">
			<a href='?do=admin'>管理權限設置</a>
<?php
$r=find("admin",['acc'=>$_SESSION['admin']]);
$r['power']=unserialize($r['power']);
if(in_array("商品分類與管理",$r['power']))echo "<a href='?do=th'>商品分類與管理</a>";
if(in_array("訂單管理",$r['power']))echo "<a href='?do=ord'>訂單管理</a>";
if(in_array("會員管理",$r['power']))echo "<a href='?do=login'>會員管理</a>";
if(in_array("頁尾版權區管理",$r['power']))echo "<a href='?do=bot'>頁尾版權區管理</a>";
if(in_array("最新消息管理",$r['power']))echo "<a href='?do=news'>最新消息管理</a>";


?>

            	        	<a href="?do=logout" style="color:#f00;">登出</a>
                    </div>
                    </div>
        <div id="right">
<?php
$do=(!empty($_GET['do']))?$_GET['do']:"admin";
include_once "./back/".$do.".php";
?>			
        	        </div>
        <div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
        	頁尾版權 :  <?=find("bot",1)['text'];?>      </div>
    </div>

</body></html>