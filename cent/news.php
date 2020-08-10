<div>
<fieldset style="margin:50px;">
    <legend>目前位置:首頁 > 最新文章區</legend>
    <table >
    <tr>
        <td style="width:40%">標題</td>
        <td style="width:58%">內容</td>
        <td></td>
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
        <td class='step' onclick='chkmore(<?=$r['id'];?>)'><?=$r['name'];?></td>
        <td><div id="newf<?=$r['id'];?>"><?=mb_substr($r['text'],0,10);?></div><div id="newd<?=$r['id'];?>" style="display:none;"><?=$r['text']?></div></td>
        <td>
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
<a href="index.php?do=news&p=<?=(($now-1)>0)?$now-1:1;?>"><</a>
<?php
for ($i=1; $i <=$page ; $i++) { 
   if($i==$now){
    echo "<a href='index.php?do=news&p=".$i."' style='font-size: 24px;'>".$i."</a>";
   }else{
    echo "<a href='index.php?do=news&p=".$i."' >".$i."</a>";
   }
}
?>

<a href="index.php?do=news&p=<?=(($now+1)<$page)?$now+1:$page;?>">></a>
</div>
</fieldset>

</div>

