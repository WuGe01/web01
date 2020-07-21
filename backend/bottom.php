<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">頁尾版權資料管理</p>
					<form method="post"  enctype="multipart/form-data" action="./api/updateTitle.php">
						<table width="50%" style="margin:auto;">
		
							<tbody>
<?php
$title=new DB('bottom');
$r=$title->find(1);
echo "<input type='hidden' name='type' value='bottom'>";


?>
	<tr>
		<td class="cent" style="background-color: orange;">頁尾版權資料管理:</td>
		<td class="cent"><input type="text" name="text[]" value="<?=$r['text'];?>">
		<input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
	</tr>

<?php

?>
							</tbody>
							
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
									<td width="200px">
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
			<h2>進站總人數修正</h2>		
			<hr>
			<form action="./api/setTitle.php" method="post" enctype="multipart/form-data">
	
			
			<div>
				<input type='hidden' name='type' value='bottom'>
				<input type="hidden" name="id[]" value="<?=$r['id'];?>">
				進站總人數:
					<input type="text" name="text">
				</div>
				<div>
					<input type="submit" value="確認">
					<input type="reset" value="重置">
				</div>
			</form>
			</div>
		</div>
		</div>
</div>
