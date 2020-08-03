


<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">網站標題管理</p>
<form method="post" action="./api/update.php?title=main">
<table width="100%">
<tbody>
<tr class="yel">
<td width="45%">網站標題</td>
<td width="23%">替代文字</td>
<td width="7%">顯示</td>
<td width="7%">刪除</td>
<td></td>
</tr>

<?php
$rows=all('main',[]);
foreach ($rows as $r) {
$isCHK=($r['sh']==1)?"checked":"";
?>
<tr>
    <td><img src="./img/<?=$r['name'];?>" style="width:95%"></td>
    <td><input type="text" name="text[]" value="<?=$r['text'];?>" id=""></td>
    <td><input type="radio" name="sh[]" value="<?=$r['id'];?>" id="" <?=$isCHK;?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>" id="" ></td>
    <td><input type="button" value="更新圖片" onclick="op2('#cover2','#cvr',<?=$r['id'];?>)">
    <input type="hidden" name="id[]"  value="<?=$r['id'];?>">
    </td>
</tr>

<?php
}
?>
</tbody></table>
<table style="margin-top:40px; width:70%;">
<tbody><tr>
<td width="200px"><input type="button" onclick="op('#cover','#cvr')" value="新增網站標題圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody></table>    

</form>
 </div>



 <div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
        <h3 class="ct">新增標題區圖片</h3>
        <hr>
        <form action="./api/save.php?title=main" method="post" enctype="multipart/form-data">
        <div class="ct">標題區圖片:
            <input type="file" name="img" id="">
        </div>
        <div class="ct">標題區替代文字:
            <input type="text" name="text" id="">
        </div>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
        </form>
    </div>
    </div>
</div>

<div id="cover2" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover2&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
        <h3 class="ct">變更標題區圖片</h3>
        <hr>
        <form action="./api/save.php?title=main" method="post" enctype="multipart/form-data">
        <div class="ct">標題區圖片:
            <input type="file" name="img" >
            <input type="hidden" name="id" id='taget'>
        </div>
        <div class="ct">
            <input type="submit" value="變更">
            <input type="reset" value="重置">
        </div>
        </form>
    </div>
    </div>
</div>
