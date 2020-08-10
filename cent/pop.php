<div>
<fieldset style="margin:50px;">
    <legend>目前位置:首頁 > 人氣文章區</legend>
    <table >
    <tr>
        <td style="width:35%">標題</td>
        <td style="width:35%">內容</td>
        <td style="width:20%">人氣</td>
    </tr>
<?php
$total=col('op','');
$max=5;
$page=ceil($total/$max);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$start=($now-1)*$max;
$roews=all('op','',"limit  ".$start." ,".$max."");
foreach ($roews as $r) 
{
?>
    <tr>
        <td class='step' ><?=$r['name'];?></td>
        <td class="pophead"><div id="newf<?=$r['id'];?>"><?=mb_substr($r['text'],0,10);?></div><div class='poptext' id="newd<?=$r['id'];?>" ><?=$r['text']?></div></td>
        <td>
            <?=col('news',['toid'=>$r['id']]);?> 個人說
            <img src="./img/02B03.jpg" style="width:10px">
        <?php
    if(!empty($_SESSION['login'])){
        if((col('news',['acc'=>$_SESSION['login'],"toid"=>$r['id']]))>0){
            echo "<input data-id='".$r['id']."' type='button' onclick='sayGoof(this)' value='收回讚'>";
        }else{
            echo "<input data-id='".$r['id']."' type='button' onclick='sayGoof(this)' value='讚'>";
             }
    }
        ?>
        </td>
    </tr>
    

<?php
}
?>

</table>
<div class="ct">
<a href="index.php?do=pop&p=<?=(($now-1)>0)?$now-1:1;?>"><</a>
<?php
for ($i=1; $i <=$page ; $i++) { 
   if($i==$now){
    echo "<a href='index.php?do=pop&p=".$i."' style='font-size: 24px;'>".$i."</a>";
   }else{
    echo "<a href='index.php?do=pop&p=".$i."' >".$i."</a>";
   }
}
?>

<a href="index.php?do=pop&p=<?=(($now+1)<$page)?$now+1:$page;?>">></a>
</div>
</fieldset>

</div>