<div id="mm">
<div class="ct a rb" style="position:relative; width:101.5%; left:-1%; padding:3px; top:-9px;"> 
    <a href="?do=nodo2">網站標題管理</a>| 
    <a href="?do=nodo2">動態文字管理</a>| 
    <a href="?do=rr">預告片海報管理</a>| 
    <a href="?do=vv">院線片管理</a>| 
    <a href="?do=order">電影訂票管理</a> </div>
    <div class="bgmovie rb over">
    <div class="bg-c ct ma w-80 t-0">預告片清單</div>
    <table class="ct ma w-80 t-0">
        <thead>
            <tr class="bg-c">
                <th>預告片海報</th>
                <th>預告片片名</th>
                <th>預告片排序</th>
                <th>操作</th>
              
            </tr>
        </thead>
        <form action="./api/editpop.php" method="post">
        <tbody class="bg-f">
<?php
$rows=all('pop','');
$total=col('pop','');
$ii=1;
foreach ($rows as $r) {
$ischeck=($r['sh']==1)?"checked":"";

?>
            <tr id='chg<?=$ii;?>'>
                <td><img src="./img/<?=$r['name'];?>" class="w-100p"></td>
                <td><input type="text" name="text[]" value="<?=$r['text'];?>">
                <input type="hidden" name="ord[]" value="<?=$r['ord'];?>"></td>
                <td>
                <input type="button" value="往上" onclick="Xchg(<?=$ii;?>,<?=(($ii-1)>0)?($ii-1):1;?>)">    
                <input type="button" value="往下" onclick="Xchg(<?=$ii;?>,<?=(($ii+1)<$total)?($ii+1):$total;?>)">  
                </td>
                <td>
                    <input type="checkbox" name="sh[]" value="<?=$r['id'];?>"  <?=$ischeck;?>>顯示
                    <input type="checkbox" name="del[]" value="<?=$r['id'];?>" >刪除
                    <input type="hidden" name="id[]" value="<?=$r['id'];?>">
                
               
                    <select name="type[]"> 
                        <option value="1" <?=($r['type']==1)?'selected':'';?>>淡入淡出</option>
                        <option value="2" <?=($r['type']==2)?'selected':'';?>>滑入滑出</option>
                        <option value="3" <?=($r['type']==3)?'selected':'';?>>放大縮小</option>
                    </select>
                    <input type="hidden" name="name[]" value="<?=$r['name'];?>">
                </td>
                
            </tr>
<?php
$ii+=1;
}
?>
        </tbody>

    </table>
    <div class="ct">
    <input type="submit" value="修改確認">
        <input type="reset" value="重置">
    </div>
        </form>
    <hr>
    <div class="bg-c ct ma w-80 t-0">新增預告片片海報</div>
    <form action="./api/addpop.php" method="post" enctype="multipart/form-data">
    <div class='ct'>
        預告片海報：
        <input type="file" name="img" id="">
        預告片片名：
        <input type="text" name="text" id="">
    </div>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div></form>
    </div>
</div>
