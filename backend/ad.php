<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">動態文字廣告管理</p>
					<form method="post" enctype="multipart/form-data" action="./api/updateTitle.php">
						<table width="100%">
							<tbody>
								<tr class="yel">
									<td width="68%">動態文字廣告</td>
									<td width="7%">顯示</td>
									<td width="7%">刪除</td>
								</tr>
								<?php
$title=new DB('ad');
$rows=$title->all();
echo "<input type='hidden' name='type' value='ad'>";
foreach ($rows as $r) {
	$ischk=($r['sh']==1)?"checked":"";
?>
	<tr>
		<td class="cent"><input style="width:90%;" type="text" name="text[]" value="<?=$r['text'];?>"></td>
		<td class="cent"><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$ischk?>></td>
		<td class="cent"><input type="checkbox" name="del[]" value="<?=$r['id'];?>">
		<input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
	</tr>

<?php
}
?>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
									<td width="200px"><input type="button"
											onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=title&#39;)"
											value="新增動態文字廣告"></td>
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
			<h2>新增動態文字廣告</h2>		
			<hr>
			<form action="./api/setTitle.php" method="post" enctype="multipart/form-data">

				<div>
					動態文字廣告:
					<input type="text" name="text">
					<input type='hidden' name='type' value='ad'>
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