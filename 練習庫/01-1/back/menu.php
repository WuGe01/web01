


<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">選單管理</p>
<form method="post" action="./api/update.php?title=menu">
<table width="100%">
<tbody>
<tr class="yel">
<td width="22%">主選單主名稱</td>
<td width="22%">選單連結網址</td>
<td width="22%">次選單數量</td>
<td width="7%">顯示</td>
<td width="7%">刪除</td>
<td></td>
</tr>

<?php
$rows=all('menu',['parent'=>0]);
foreach ($rows as $r) {
$isCHK=($r['sh']==1)?"checked":"";
?>
<tr>
    <td><input type="text" name="name[]" value="<?=$r['name'];?>"></td>
    <td><input type="text" name="text[]" value="<?=$r['text'];?>" id=""></td>
    <td><?=col('menu',['parent'=>$r['id']]);?></td>
    <td><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" id="" <?=$isCHK;?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>" id="" ></td>
    <td><input type="button" value="編輯次選單" onclick="op3('#cover2','#cvr',<?=$r['id'];?>)">
    <input type="hidden" name="id[]"  value="<?=$r['id'];?>">
    </td>
</tr>

<?php
}
?>
</tbody></table>
<table style="margin-top:40px; width:70%;">
<tbody><tr>
<td width="200px"><input type="button" onclick="op('#cover','#cvr')" value="新增選單"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
</tr>
</tbody></table>    

</form>
 </div>



 <div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
        <h3 class="ct">新增主選單</h3>
        <hr>
        <form action="./api/save.php?title=menu" method="post" >
        <div class="ct">主選單名稱:
            <input type="text" name="name" id="">
        </div>
        <div class="ct">主選單連結網址:
            <input type="text" name="text" id="">
            <input type="hidden" name="parent" value="0">
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
        <h3 class="ct">編輯次選單</h3>
        <hr>
        <form action="./api/update.php?title=menu" method="post" >
        <table>
            <thead>
                <tr>
                    <td>次選單名稱:</td>
                    <td>次選單連結網址:</td>
                    <td>刪除</td>
                </tr>
            </thead>
            <tbody id="flagg">
             
            </tbody>
        </table>
   
        <div class="ct">
            <input type="submit" value="確認修改">
            <input type="reset" value="重置">
            <input type="button" value="更多次選單" onclick="addm()">
        </div>
        </form>
        <input type="hidden" id="tarrrget">
    </div>
    </div>
</div>
<script>
    function op3(x,y,id){
	$(x).fadeIn()
	if(y)
    $(y).fadeIn()
    $("#tarrrget").val(id)
    $.post("./api/menuApi.php",{id},(e)=>{
        $("#flagg").html(e);
    })

}
function addm() {
    let v=$("#tarrrget").val()
    $("#flagg").append(`<tr>
    <td><input type="text" name="Xname[]"></td>
		<td><input type="text" name="Xtext[]">
		<input type="hidden" name="Xparent[]" value="${v}"></td>
		<td><input type="checkbox" name="Xdel[]"></td></tr>
    `);
}
</script>