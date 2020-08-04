<div class="ct">更多最新消息顯示區</div>
<HR></HR>
<ul class="ssaa2" style="list-style-type:decimal;">
<?php
$tatol=col('news',['sh'=>1]);
$mix=5;
$page=ceil($tatol/$mix);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$pshow=(($now-1)*5);
$tmp=" limit ".($pshow*1).",".$mix."";
$rows=all('news',[],$tmp);
foreach ($rows as $r) {
    echo "<li>".mb_substr($r['text'],0,10)."... <div class='all' style='display:none'>".$r['text']."</div></li>";
}
?>
</ul>
<div class="ct">
    <a class='aaa bl' style="font-size:30px;" href="index.php?do=news&p=<?=($now-1>0)?($now-1):1;?>"><</a>
<?php
for ($i=1; $i <= $page; $i++) { 
    if($i==$now){
        echo "<a class='aaa bl' style='font-size:36px;' href='index.php?do=news&p=".$i."'>".$i."</a>";
    }else{
        echo "<a class='aaa bl' style='font-size:30px;' href='index.php?do=news&p=".$i."'>".$i."</a>";
    }
}
?>

    <a class='aaa bl' style="font-size:30px;" href="index.php?do=news&p=<?=($now+1<$page)?($now+1):$page;?>">></a>
</div>

    </div>
<div id="altt2" style="position: absolute;
    bottom:200px;
                     width: 350px;
                      min-height: 100px;
                       word-break:break-all;
                     text-align:justify; 
                      background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; 
                      display: none; 
                      padding: 5px;
                       border: 3px double rgb(255, 153, 0);
                        background-position: initial initial; 
                        background-repeat: initial initial;"></div>
                    	<script>

						$(".ssaa2 li").hover(
							function ()
							{
								$("#altt2").html("<pre>"+$(this).children(".all").html()+"</pre>")
								$("#altt2").show()
							}
						)
						$(".ssaa2 li").mouseout(
							function()
							{
								$("#altt2").hide()
							}
						)
                        </script>