<?php
include_once "./input/base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
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
                        <div style="padding:10px;">
                        <a href="index.php">回首頁</a> |
                        <a href="?do=news">最新消息</a> |
                        <a href="?do=look">購物流程</a> |
                        <a href="?do=buycart">購物車</a> |
            
<?php
if(!empty($_SESSION['login'])){
?>
<a href="?do=loginout">會員登出</a>
<?php
}else{
?>
 <a href="?do=login">會員登入</a> 
<?php        
}
?>
                        |
<?php
if(!empty($_SESSION['admin'])){
?>
<a href="back.php">回到管理</a>
<?php
}else{
?>
<a href="?do=admin">管理登入</a>
<?php        
}
?>
                    
           </div>
           <marquee behavior="" direction="">

                   情人節特惠活動 &nbsp; 為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~   
           </marquee>
             </div>
        <div id="left2" class="ct">
                <div style="min-height:400px;">

<?php
$rows=all("th",['parent'=>0]);
echo "<a class='tt' href='?do=main'>全部商品(".col("good",'').")</a>";
foreach ($rows as $r) {
echo "<div class='good1'>";
echo "<a class='tt' href='?do=main&type=big&val=".$r['id']."'>".$r['name']."(".col("good",['big'=>$r['id']]).")</a>";
$fows=all("th",['parent'=>$r['id']]);  
foreach ($fows as $f) {
echo "<a class='pp good2' href='?do=main&type=mid&val=".$f['id']."'>".$f['name']."(".col("good",['mid'=>$f['id']]).")</a>";
}
echo "</div>";
}
?>
 
        	            </div>
                        <span>
            	<div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                	00005                </div>
            </span>
                    </div>
        <div id="right">


<?php
$do=(!empty($_GET['do']))?$_GET['do']:"main";
include_once "./cent/".$do.".php";
?>

        	        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
        	頁尾版權 :    <?=find("bot",1)['text'];?>      </div>
    </div>

</body></html>