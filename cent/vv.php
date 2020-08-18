<div id="mm">
<div class="ct a rb" style="position:relative; width:101.5%; left:-1%; padding:3px; top:-9px;"> 
    <a href="?do=nodo2">網站標題管理</a>| 
    <a href="?do=nodo2">動態文字管理</a>| 
    <a href="?do=rr">預告片海報管理</a>| 
    <a href="?do=vv">院線片管理</a>| 
    <a href="?do=order">電影訂票管理</a> </div>
    <div class="bgmovie rb over">
    <a href="?do=addmove">
    <input type="button" value="新增電影">
    </a>
    <hr>
    <table style="background-color:#FFF;width:100%;color:#111">
<?php
$rows=all("movie","");
foreach ($rows as $r) {
 

?>
    <tr>
        <td style="width:10%"><img src="./img/<?=$r['img'];?>"  style="width:120px"></td>
        <td style="width:10%">
        <div style="color:#111">
        分級：
        <img src="./img/03C0<?=$r['level'];?>.png" alt="">
        </div></td>
        <td style="width:80%">
       <table class="vvTable" style="height:70px">
       <tr>
           <td width="30%">片名：<?=$r['name'];?></td>
           <td width="30%">片長：<?=$r['loag'];?></td>
           <td width="30%">上映日期:<?=$r['year'];?>-<?=$r['month'];?>-<?=$r['day'];?></td>
       </tr>
       <tr>
           <td></td>
           <td></td>
           <td>
           <form action="./api/del.php" method="post">
           <a href="?do=editmove&id=<?=$r['id'];?>">
           <input type="button" value="編輯電影">
           </a>
           <input type="hidden" name="id" value="<?=$r['id'];?>">
           <input type="submit" value="刪除電影">
    
           </form>
           </td>
       </tr>
       </table> 
       <div style="height:70px">
       <?=$r['text'];?>
       </div>
        </td>
    </tr>
<?php
}
?>
    
    </table>
    </div>
</div>