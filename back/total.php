


<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">進站人數管理</p>
<form method="post" action="./api/update.php?title=total">
<table width="100%">
<tbody>

<?php
$rows=all('total',[]);
foreach ($rows as $r) {
?>
<tr>

    <td class="ct"><p class="yal">進站人數</p><input type="text" name="text[]" value="<?=$r['text'];?>" id=""></td>

    <input type="hidden" name="id[]"  value="<?=$r['id'];?>">
</tr>

<?php
}
?>
</tbody></table>
<table style="margin-top:40px; width:70%;">
<tbody><tr>
<td width="200px"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody></table>    

</form>
 </div>