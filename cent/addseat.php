<?php
if(!empty($_POST)){
    $_POST['qt']=count($_POST['seat']);
    $_POST['no']=date("Ymdhis");
    $_POST['seat']=json_encode($_POST['seat']);
    save('qt',$_POST);
    $_POST['seat']=json_decode($_POST['seat']);

}
?>
<div id="mm">
<table>
<tr></tr>
    <td colspan="2">感謝您的訂購，您的訂單編號是：<?=$_POST['no'];?></td>

</tr>
<tr>
    <td>電影名稱</td>
    <td><?=$_POST['name'];?></td>
</tr>
<tr>
    <td>日期:</td>
    <td><?=$_POST['sdat'];?></td>
</tr>
<tr>
    <td>場次時間:</td>
    <td><?=$_POST['type'];?></td>
</tr>
<tr>
    <td colspan="2">
<?php
foreach ($_POST['seat'] as $r){

echo "<div>".ceil(($r+1)/5)."排".((($r)%5)+1)."號</div>";

}
?>
    </td>
</tr>
<tr>
    <td colspan="2" class="ct">
        <input type="button" value="確認" onclick="location.replace('index.php')">
    </td>
</tr>
    
</table>
</div>