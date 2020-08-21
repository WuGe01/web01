<h1 class="ct">
  會員管理
</h1>
<table class="mauto p20">
    <tr>
        <td class="tt  p20" style="width:120px">帳號</td>
        <td class="tt  p20" style="width:120px">密碼</td>
        <td class="tt  p20" style="width:120px">註冊日期</td>
        <td class="tt  p20" style="width:120px">操作</td>
    </tr>
<?php
$rows=all("login","");
foreach ($rows as $r) {
?>
    <tr>
        <td class="pp  p20">
        <?=$r['acc'];?>
        </td>
        <td class="pp  p20">
        <?=str_repeat("*",strlen($r['pw']));?>
        </td>
        <td class="pp  p20"><?=$r['ondat'];?></td>
        <td class="pp  p20">
<?php
if($r['sh']!=0){
?>
            <a href="back.php?do=Newlogin&id=<?=$r['id'];?>">
                <input type="button" value="修改">
            </a>

    <input type="button" value="刪除" onclick="del('login',<?=$r['id'];?>)">
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

<!-- <div class="ct">
    <a href="index.php">
        <input type="button" value="返回">
    </a>
</div> -->
