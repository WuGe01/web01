<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">動畫圖片管理</p>
        <form method="post" action="./api/update.php?title=mvim">
    <table width="100%">
    	<tbody><tr class="yel">
            <td width="68%">動畫圖片</td>
            <td width="7%">顯示</td>
            <td width="7%">刪除</td>
            <td></td>
            </tr>
<?php
$rows=all('mvim',[]);
foreach ($rows as $r) {
$ischk=($r['sh']==1)?"checked":"";
?>
            <tr>
                <input type="hidden" name="id[]" value="<?=$r['id'];?>">
            <td class="ct"><img style="width:100px;" src="./img/<?=$r['name'];?>" alt=""></td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$ischk;?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
            <td><input type="button" value="更新圖片" onclick="op2('#cover2','#cvr2','<?=$r['id'];?>')"></td>
            </tr>
<?php
}
?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=title')" value="新增動畫圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
</div>


<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
    <h2 class="ct">新增動畫圖片</h2>
    <form action="./api/save.php?title=mvim" method="post" enctype="multipart/form-data">
    <div class="ct">動畫圖片:
        <input type="file" name="img" id="">
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
    <h2 class="ct">變更動畫圖片</h2>
    <form action="./api/save.php?title=mvim" method="post" enctype="multipart/form-data">
    <div class="ct">動畫圖片:
        <input type="file" name="img" id="">
        <input type="hidden" name='id' id="target">
    </div>
    <div class="ct">
        <input type="submit" value="確認">
        <input type="reset" value="重置">
    </div></form>
    </div>
    </div>
</div>

