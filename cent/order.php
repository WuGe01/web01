<div id="mm">
<div class="ct a rb" style="position:relative; width:101.5%; left:-1%; padding:3px; top:-9px;"> 
    <a href="?do=nodo2">網站標題管理</a>| 
    <a href="?do=nodo2">動態文字管理</a>| 
    <a href="?do=rr">預告片海報管理</a>| 
    <a href="?do=vv">院線片管理</a>| 
    <a href="?do=order">電影訂票管理</a> </div>
    <div class="bgmovie rb over">
<div class="ct">訂單資料</div>
<div>
    <form action="./api/del3.php" method="post">
    快速刪除:
    <input type="radio" name="deltype" value="1">
    依日期:
    <input type="text" name="type" value="">
    <input type="radio" name="deltype" value="2">
    依電影:
    <select name="name" id="">
<?php
$rows=all("qt","");
$t=[];
foreach ($rows as $r) {
if(!in_array($r['name'],$t)){
    $t[]=$r['name'];
    echo "<option>".$r['name']."</option>";
}
}
?>

    </select>
    <input type="submit" value="刪除">

</div></form>
<table class="ct" style="width:100%">
    <tr>
        <td>訂單編號</td>
        <td>電影名稱</td>
        <td>日期</td>
        <td>場次時間</td>
        <td>訂購數量</td>
        <td>訂購位置</td>
        <td>操作</td>
    </tr>
<?php
foreach ($rows as $r) {


?>
    <tr>
        <td><?=$r['no'];?></td>
        <td><?=$r['name'];?></td>
        <td><?=$r['sdat'];?></td>
        <td><?=$r['type'];?></td>
        <td><?=$r['qt'];?></td>
        <td>
<?php
$r['seat']=json_decode($r['seat']);
foreach ($r['seat'] as $e){

echo "<div>".ceil(($e+1)/5)."排".((($e)%5)+1)."號</div>";

}

?>
        </td>
        <td><input type="button" value="刪除" onclick="del2(<?=$r['id'];?>)"></td>
    </tr>
<?php
}
?>
</table>


</div>
</div>
<script>
    function del2(id) {
        $.post("./api/del2.php",{id},()=>{
            location.replace('index.php?do=order')
        })

    }
</script>