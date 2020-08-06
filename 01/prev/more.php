
<h2 class="ct">更多最新消息</h2>   
<hr>
<ul class="ssaa" style="list-style-type:decimal;">
<?php
$total=col('news','');
$mix=5;
$pape=ceil($total/$mix);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$genow=($now*1-1)*$mix;
$rows=all('news',[]," limit ".$genow.",".$mix."");
foreach ($rows as $r) {
	echo "<li class='sswww'>".mb_substr($r['text'],0,20)." <div class='all' style='display: none;'>".$r['text']."</div></li>";
}
?>

															</ul>



<div class="ct">
    <a class="aaa bl" style="font-size:30px;" href="index.php?do=main&p=<?=($now*1-1>0)?($now*1-1):1;?>"><</a>
<?php
for ($i=1; $i <= $pape; $i++) { 
    if($i==$now){

        echo "<a class='aaa bl' style='font-size: 36px;' href='index.php?do=main&p=".$i."'>".$i."</a>";
    }else{

        echo "<a class='aaa bl' style='font-size:30px;' href='index.php?do=main&p=".$i."'>".$i."</a>";
    }
}
?>
  
    <a class="aaa bl" style="font-size:30px;" href="index.php?do=main&p=<?=($now*1+1<$pape)?($now*1+1):$pape;?>">></a>
    
    </div>
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
                               