<div style="width:100%; padding:2px; height:290px;">
                    	<div id="mwww" loop="true" style="width:100%; height:100%;">
															<div style="width:99%; height:100%; position:relative;" class="cent" id="XXW">
													
													<img  style="width:99%;height:100%" src="./img/<?=find('mvim',['sh'=>1])['name'];?>" >	</div>
<?php
$rows=all("mvim",['sh'=>1]);
$tt=[];
foreach ($rows as $r) {
	$tt[]="'".$r['name']."'";
}

?>												
														
														
														
                                                        </div>
                    </div>
                	<div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
							<span class="t botli">最新消息區 
<?php
if(col('news',['sh'=>1])>5)echo "<a class='more' href='?do=more'>More...</a>";
?>
							</span>
						
							<ul class="ssaa" style="list-style-type:decimal;">
<?php
$total=col('news','');
$mix=5;
$pape=ceil($total/$mix);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$genow=($now*1-1)*$mix;
$rows=all('news',[]," limit ".$genow.",".$mix."");
foreach ($rows as $r) {
	echo "<li>".mb_substr($r['text'],0,20)." <div class='all' style='display: none;'>".$r['text']."</div></li>";
}
?>

															</ul>
															
															<div class="ct">
    <a class="aaa" href="index.php?do=main&p=<?=($now*1-1>0)?($now*1-1):1;?>"><</a>
<?php
for ($i=1; $i <= $pape; $i++) { 
    if($i==$now){

        echo "<a class='aaa' style='font-size: 24px;' href='index.php?do=main&p=".$i."'>".$i."</a>";
    }else{

        echo "<a class='aaa' href='index.php?do=main&p=".$i."'>".$i."</a>";
    }
}
?>
  
    <a class="aaa" href="index.php?do=main&p=<?=($now*1+1<$pape)?($now*1+1):$pape;?>">></a>
    
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

						var lin=new Array();
						lin=[<?=join(",",$tt);?>]
						var now=0;
						if(lin.length>1)
						{
							setInterval("ww()",3000);
							now=1;
						}
						function ww()
						{
							
							$("#XXW").html(`<img  style="width:99%;height:100%" src="./img/${lin[now]}" >`)
							//$("#mwww").attr("src",lin[now])
							now++;
							if(now>=lin.length)
							now=0;
						}
					</script>
                    </div>
                	               