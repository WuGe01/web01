<div class="ct">
    <a href="back.php?do=Newadmin">
        <input type="button" value="新增管理員">
    </a>
</div>
<table class="mauto p20">
    <tr>
        <td class="tt  p20" style="width:100px">帳號</td>
        <td class="tt  p20" style="width:100px">密碼</td>
        <td class="tt  p20" style="width:100px">操作</td>
    </tr>
<?php
$rows=all("admin","");
foreach ($rows as $r) {
?>
    <tr>
        <td class="pp  p20">
        <?=$r['acc'];?>
        </td>
        <td class="pp  p20">
        <?=str_repeat("*",strlen($r['pw']));?>
        </td>
        <td class="pp  p20">
<?php
if($r['sh']!=0){
?>
            <a href="back.php?do=Fixadmin&id=<?=$r['id'];?>">
                <input type="button" value="修改">
            </a>
            <!-- <form action="./api/del.php" method="post"></form> -->
    <input type="button" value="刪除" onclick="del('admin',<?=$r['id'];?>)">
<?php
}else{
    echo "此為最高管理權限";
}
?>    
        </td>
    </tr>
<?php
}
?>
</table>

<div class="ct">
    <a href="index.php">
        <input type="button" value="返回">
    </a>
</div>
