
<!--正中央-->

                	<div style="width:100%; padding:2px; height:290px;">

					<div id="mwww" loop="true" style="width:100%; height:100%;">
<div style="width:99%; height:100%; position:relative;" class="cent" id="mwww">

<img style="width:99%; height:100%;" src="./img/<?=find('mvim',['sh'=>1])['name'];?>" alt="" >

</div>
                                                        </div>
                    </div>
                	<div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
                    		<span class="t botli">最新消息區
<?php
$tatol=col('news',['sh'=>1]);
if($tatol>5)echo "<a href='index.php?do=news' style='float:right'>More...</a>";
?>	
</span>	
                            <ul class="ssaa" style="list-style-type:decimal;">
							<?php

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
<a class='aaa' href="index.php?do=main&p=<?=($now-1>0)?($now-1):1;?>"><</a>
<?php
for ($i=1; $i <= $page; $i++) { 
if($i==$now){
echo "<a class='aaa' style='font-size: 18px;' href='index.php?do=main&p=".$i."'>".$i."</a>";
}else{
echo "<a class='aaa' href='index.php?do=main&p=".$i."'>".$i."</a>";
    }
}
?>
    <a class='aaa' href="index.php?do=main&p=<?=($now+1<$page)?($now+1):$page;?>">></a>
</div>															
        			<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".ssaa li").hover(
							function ()
							{
								$("#altt").html("<pre>"+$(this).children(".all").html()+"</pre>")
								$("#altt").show()
							}
						)
						$(".ssaa li").mouseout(
							function()
							{
								$("#altt").hide()
							}
						)
                        </script>
                    </div>
</div>

<?php
$rows=all("mvim",['sh'=>1]);
$st=[];
$no=0;
foreach ($rows as $r) {
	$st[$no]="'".$r['name']."'";
	$no++;
}
$ttt=join(',',$st);

?>
<script>
var lin=new Array();
lin=[<?=$ttt;?>]
console.log(lin)
var now=0;
if(lin.length>1)
{
setInterval("ww()",3000);
now=1;
}
function ww() {
	$("#mwww").html(`<img style='width:99%; height:100%;' src='./img/${lin[now]}'>`)
	now++;	
	if(now>=lin.length)now=0;
}
</script>