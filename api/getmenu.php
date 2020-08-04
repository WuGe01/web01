<?php
include_once "../input/base.php";

?>
<table class="ct" id="#target3">
<tr></tr>
    <td>次選單名稱</td>
    <td>次選單連結網址</td>
    <td>刪除</td>
</tr>

<?php
$rows=all('menu',['parent'=>$_GET['id']]);
foreach ($rows as $r) {
?>

    <tr>
    <input type="hidden" name="id[]" value="<?=$r['id'];?>">
        <td><input type="text" name="name[]" value="<?=$r['name'];?>"></td>
        <td> <input type="text" name="text[]" value="<?=$r['text'];?>"></td>
        <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
    </tr>


   

<?php
}
?>
</table>