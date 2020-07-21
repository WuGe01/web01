<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">校園映象資料管理</p>
					<form method="post"  enctype="multipart/form-data" action="./api/updateTitle.php">
						<table width="100%">
							<thead>
								<tr class="yel">
									<td width="68%">校園映象圖片</td>

									<td width="7%">顯示</td>
									<td width="7%">刪除</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
<?php
$title=new DB('image');
$rows=$title->all();
echo "<input type='hidden' name='type' value='image'>";
foreach ($rows as $r) {
	$ischk=($r['sh']==1)?"checked":"";
?>
	<tr class="GetImg">
		<td><img style="width:100px;" src="./img/<?=$r['name'];?>" ></td>
		<td class="cent"><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$ischk?>></td>
		<td class="cent"><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
		<td class="cent"><input type="button" value="更新動畫" onclick="ckfile(this)">
		<input type="file" name="img[]" style="display:none;" onchange="readURL(this)">
		<input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
	</tr>

<?php
}
?>
							</tbody>
											
						</table>

<div id="tagetP">


</div>

<script>
	page(1)
</script>
						
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
									<td width="200px"><input type="button"
											onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=title&#39;)"
											value="新增校園映象圖片"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
									</td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>
				<div id="cover" style="display:none; ">

<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
				onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
			<div class="cent">
			<h2>新增校園映象圖片</h2>		
			<hr>
			<form action="./api/setTitle.php" method="post" enctype="multipart/form-data">
				<div>校園映象圖片:
					<input type="file" name="img">
					<input type='hidden' name='type' value='image'>
				</div>
				<div>
					<input type="submit" value="新增">
					<input type="reset" value="重置">
				</div>
			</form>
			</div>
		</div>
		</div>
</div>
