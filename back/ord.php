
<h1 class="ct">訂單管理資料</h1>

<table class="mauto w-80 pp">
<tr>
    <td class="tt">訂單編號</td>
    <td class="tt">金額</td>
    <td class="tt">會員帳號</td>
    <td class="tt">姓名</td>
    <td class="tt">下單日期</td>
    <td class="tt">操作</td>
</tr>
<?php
$rows=all("ord","");
foreach ($rows as $r) {
$r['total']=unserialize($r['total']);
$total="0";
foreach ($r['total'] as $value) {
    $total=$total*1+$value*1;
}
?>
<tr>
    <td class="pp" onclick="location.replace('back.php?do=oord&id=<?=$r['id'];?>')"><?=$r['no'];?></td>
    <td class="pp"><?=$total;?></td>
    <td class="pp"><?=$r['acc'];?></td>
    <td class="pp"><?=$r['name'];?></td>
    <td class="pp"><?=$r['ondat'];?></td>
    <td class="pp">
        <button onclick="del('ord',<?=$r['id'];?>)">刪除</button>
    </td>
</tr>
<?php
   
}
?>
</table>
<div class="ct">
   <input type="button" onclick="location.replace('back.php')" value="返回">
</div>