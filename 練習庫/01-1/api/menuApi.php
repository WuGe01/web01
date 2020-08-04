<?php
include_once "../input/base.php";
$rows=all('menu',['parent'=>$_POST['id']]);
foreach ($rows as $r) {
  
?>
	<tr>
		<td><input type="text" name="name[]" value="<?=$r['name'];?>"></td>
		<td><input type="text" name="text[]" value="<?=$r['text'];?>">
		<input type="hidden" name="parent[]" value="<?=$_POST['id'];?>"></td>
		<td><input type="checkbox" name="del[]" value="<?=$r['id'];?>">
		<input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
    </tr>
<?php
}
?>