<?php
include "./input/base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>卓越科技大學校園資訊系統</title>
<link href="./input/css.css" rel="stylesheet" type="text/css">
<script src="./input/jquery-3.4.1.min.js"></script>
<script src="./input/js.js"></script>
</head>

<body>
<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>
<iframe style="display:none;" name="back" id="back"></iframe>
	<div id="main">
    	<a title="" href="?"><div class="ti" style="background:url('./img/<?=find('main',['sh'=>1])['name'];?>'); background-size:cover;"></div><!--標題--></a>
        	<div id="ms">
             	<div id="lf" style="float:left;">
            		<div id="menuput" class="dbor">
                    <!--主選單放此-->
                    	                            <span class="t botli">主選單區</span>
                                                </div>
                    <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    	<span class="t">進站總人數 : 
                        	<?=find('total',1)['text'];?>                      </span>
                    </div>
				</div>
<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
<?php
$rt=all('ad',['sh'=>1]);
$str="";
foreach ($rt as $t) {
	$str.=" ".$t['text'];
}
echo $str;
?>
                    	                    </marquee>
                    <div style="height:32px; display:block;"></div>
								
<?php
$do=(!empty($_GET['do']))?$_GET['do']:'main';
include_once "./prev/".$do.".php";
?>              
                <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".sswww").hover(
							function ()
							{
								$("#alt").html(""+$(this).children(".all").html()+"").css({"top":$(this).offset().top-50})
								$("#alt").show()
							}
						)
						$(".sswww").mouseout(
							function()
							{
								$("#alt").hide()
							}
						)
                        </script>
                                 <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                	<!--右邊-->   
                	<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo('index.php?do=login')"><?=(!empty($_SESSION["login"]))?"回到後台":"管理登入";?></button>
                	<div style="width:89%; height:480px;" class="dbor">
                    	<span class="t botli">校園映象區</span>
						<div class="ct" onclick="pp(1)"><img src="./img/up.jpg"></div>
<?php
$tatal=col('image',['sh'=>1]);
$page=ceil($tatal/3);
$rows=all('image',['sh'=>1]);
$ii=0;
foreach ($rows as $r) {
echo "<div class='ct im' id='ssaa".$ii."'><img style='width:150px;height:103px' src='./img/".$r['name']."'></div>";
$ii++;
}
?>
						<div class="ct" onclick="pp(2)"><img src="./img/dn.jpg"></div>
						                        <script>
                        	var nowpage=0;
							function pp(x)
							{
								var s,t;
								if(x==1&&nowpage-1>=0)
								{nowpage--;}
								if(x==2&&(nowpage+4)<=<?=$tatal;?>)
								{nowpage++;}
								$(".im").hide()
								for(s=0;s<=2;s++)
								{
									t=s*1+nowpage*1;
									$("#ssaa"+t).show()
								}
							}
							pp(1)
                        </script>
                    </div>
                </div>
                            </div>
             	<div style="clear:both;"></div>
            	<div style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
                	<span class="t" style="line-height:123px;"><?=find('bottom',1)['text'];?>   </span>
                </div>
    </div>

</body></html>