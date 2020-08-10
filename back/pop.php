<form action="./api/popchk.php?title=op" method="post">
<table style="margin:50px">
    <tr>
        <td style="width:10%">編號</td>
        <td style="width:70%">內容</td>
        <td style="width:10%">顯示</td>
        <td style="width:10%">刪除</td>
    </tr>
<?php
$total=col('op','');
$max=3;
$page=ceil($total/$max);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$start=($now-1)*$max;
$roews=all('op','',"limit  ".$start." ,".$max."");
foreach ($roews as $r) 
{
    $ischk=($r['sh']==1)?"checked":"";
?>
    <tr>
        <td><?=$r['id'];?></td>
        <td ><?=$r['name'];?></td>
        <td ><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$ischk;?> ></td>
        <td ><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
        <input type="hidden" name="id[]"  value="<?=$r['id'];?>">
    </tr>
    
<?php
}
?>

</table>
<div class="ct">
<a href="back.php?do=pop&p=<?=(($now-1)>0)?$now-1:1;?>"><</a>
<?php
for ($i=1; $i <=$page ; $i++) { 
   if($i==$now){
    echo "<a href='back.php?do=pop&p=".$i."' style='font-size: 24px;'>".$i."</a>";
   }else{
    echo "<a href='back.php?do=pop&p=".$i."' >".$i."</a>";
   }
}
?>
<a href="back.php?do=pop&p=<?=(($now+1)<$page)?$now+1:$page;?>">></a>
</div>
<div class="ct"><input type="submit" value="確認修改"></div>
</form>