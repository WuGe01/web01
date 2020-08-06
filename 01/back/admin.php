<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">管理者帳號管理</p>
        <form method="post" action="./api/update.php?title=admin">
    <table width="100%">
    	<tbody><tr class="yel">
            <td width="40%">帳號</td>
            <td width="40%">密碼</td>

            <td width="7%">刪除</td>
            </tr>
<?php
$rows=all('admin',[]);
foreach ($rows as $r) {
$ischk=($r['acc']=='admin')?"readonly":"";
$ischk2=($r['acc']=='admin')?"disabled":"";
?>
            <tr>
                <input type="hidden" name="id[]" value="<?=$r['id'];?>">
            <td><input type="text" name="acc[]" value="<?=$r['acc'];?>" <?=$ischk?>></td>
            <td><input type="password" name="pw[]" value="<?=$r['pw'];?>" <?=$ischk?>></td>

            <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>" <?=$ischk2?>></td>

            </tr>
<?php
}
?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=title')" value="新增管理者帳號"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
</div>


<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
    <h2 class="ct">新增管理者帳號</h2>
    <form action="./api/save.php?title=admin" method="post" >
    <div class="ct">
        帳號：：
        <input type="text" name="acc" id="">
    </div>
    <div class="ct">
        密碼：：
        <input type="password" name="pw" id="">
    </div>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div></form>
    </div>
    </div>
</div>


