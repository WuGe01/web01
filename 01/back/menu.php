<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">選單管理</p>
        <form method="post" action="./api/update.php?title=menu">
    <table width="100%">
    	<tbody><tr class="yel">
            <td width="35%">主選單</td>
            <td width="35%">主選單連結</td>
            <td width="7%">次選單數量</td>
            <td width="7%">顯示</td>
            <td width="7%">刪除</td>
            <td></td>
            </tr>
<?php
$rows=all('menu',['parent'=>0]);
foreach ($rows as $r) {
$ischk=($r['sh']==1)?"checked":"";
?>
            <tr>
                <input type="hidden" name="id[]" value="<?=$r['id'];?>">
            <td><input type="text" name="name[]" value="<?=$r['name'];?>"></td>
            <td><input type="text" name="text[]" value="<?=$r['text'];?>"></td>
            <td><?=col('menu',['parent'=>$r['id']]);?></td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$ischk;?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
            <td><input type="button" value="新增與修改次選單" onclick="op3('#cover2','#cvr2','<?=$r['id'];?>')"></td>
            </tr>
<?php
}
?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=title')" value="新增選單圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
</div>


<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
    <h2 class="ct">新增主選單</h2>
    <form action="./api/save.php?title=menu" method="post">

    <div class="ct">
        標題區替代文字：
        <input type="text" name="name" id="">
    </div>
    <div class="ct">
        標題區替代文字：
        <input type="text" name="text" id="">
        <input type="hidden" name="parent" value="0">
    </div>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div></form>
    </div>
    </div>
</div>


<div id="cover2" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover2&#39;)">X</a>
        <div id="cvr2" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
    <h2 class="ct">新增次選單</h2>
    <form action="./api/updatemuen.php?title=menu" method="post" >

    <div class="ct" id="target2">

        </div>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
            <input type="button" value="更多次選單" onclick="more()">
        </div></form>
    </div>
</div>
</div>
<input type="hidden" name='parent' id="target">

<script>
function op3(x,y,id)
{
	$(x).fadeIn()
	if(y)
    $(y).fadeIn()
    $("#target").val(id)
    $.get("./api/getmenu.php",{id},(e)=>{
    $("#target2").html(e)
    })
}

function more(){
    let v=$("#target").val()
    console.log(v)
    $("#target2").append(`
    <table>
    <tr>
        <td><input type="text" name="Xname[]" value=""></td>
        <td><input type="text" name="Xtext[]" value=""></td>
        <input type="hidden" name="Xparent[]" value="${v}">
        <td><input type="checkbox" name="Xdel[]" ></td>
    </tr>
    
    `)
}
</script>