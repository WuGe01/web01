﻿<?php
include_once "./input/base.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>健康促進網</title>
<link href="./input/css.css" rel="stylesheet" type="text/css">
<script src="./input/jquery-3.4.1.min.js"></script>
<script src="./input/js.js"></script>
</head>

<body>
<div id="alerr" style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
	<pre id="ssaa"></pre>
</div>
<iframe name="back" style="display:none;"></iframe>
	<div id="all">
    		<div id="title">
        <?=date("n");?> 月 <?=date("j");?> 號 <?=date("l");?> | 今日瀏覽: 1 | 累積瀏覽: 36    <a style="float:right" href="index.php">回首頁</a></div>
        <div id="title2">
		<a href="index.php">
        	<img src="./img/02B01.jpg" alt="健康促進網-回首頁" title="健康促進網-回首頁">
		</a>
        </div>
        <div id="mm">
        	<div class="hal bg04"  id="lef">
            	                	    <a class="blo" href="?do=po">分類網誌</a>
               	                     	    <a class="blo" href="?do=news">最新文章</a>
               	                     	    <a class="blo" href="?do=pop">人氣文章</a>
               	                     	    <a class="blo" href="?do=know">講座訊息</a>
               	                     	    <a class="blo" href="?do=que">問卷調查</a>
               	                 </div>
            <div class="hal" id="main">
            	<div>
            		
					<marquee  style="display:inline-block;width:80%;" >請民眾踴躍投稿電子報，讓電子報成為大家相互交流、分享的園地!詳見最新文章</marquee>
                	<span style="width:18%; display:inline-block;float:right;">
					<?php
						if(!empty($_SESSION['login'])){
							echo "歡迎，";
							echo $_SESSION['login'];
							echo "<a href='?do=loginOut' style='float:right'>登出</a>";
						}else{
							echo "<a href='?do=login' style='float:right'>會員登入</a>";
						}
					?>
                    	                    </span>
											</div>
            
<div>
	<h1>請選則管理項目</h1>
</div>
                		                        
			</div>
        </div>
        <div id="bottom">
    	    本網站建議使用：IE9.0以上版本，1024 x 768 pixels 以上觀賞瀏覽 ， Copyright © 2012健康促進網社群平台 All Right Reserved 
    		 <br>
    		 服務信箱：health@test.labor.gov.tw<img src="./img/02B02.jpg" width="45">
        </div>
    </div>

</body></html>