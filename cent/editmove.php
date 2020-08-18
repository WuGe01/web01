<div id="mm">
<div class="ct a rb" style="position:relative; width:101.5%; left:-1%; padding:3px; top:-9px;"> 
    <a href="?do=nodo2">網站標題管理</a>| 
    <a href="?do=nodo2">動態文字管理</a>| 
    <a href="?do=rr">預告片海報管理</a>| 
    <a href="?do=vv">院線片管理</a>| 
    <a href="?do=order">電影訂票管理</a> </div>
    <div class="bgmovie rb over">
    <div >
    <h3 class="ct">
    影片資料：
    </h3>
    <form action="./api/addmovie.php" method="post" enctype="multipart/form-data">
    <table style="width:100%;background-color:#FFF;color:#111;padding:10px;margin:auto">
<?php
$r=find("movie",$_GET['id']);
?>
    <tr>
        <td>片名:</td>
        <td>
        <input type="hidden" name="id" value="<?=$r['id'];?>">
        <input type="text" name="name" value="<?=$r['name'];?>">
        </td>
    </tr>
    <tr>
        <td>分級:
        </td>
        <td>
        <select name="level" value="">
        <option value="1" <?=($r['level']==1)?"select":"";?>>普遍級</option>
        <option value="2" <?=($r['level']==2)?"select":"";?>>保護級</option>
        <option value="3" <?=($r['level']==3)?"select":"";?>>輔導級</option>
        <option value="4" <?=($r['level']==4)?"select":"";?>>限制級</option>
        </select>
        (普遍級、保護級、輔導級、限制級)
        </td>
    </tr>
    <tr>
        <td>片長:</td>
        <td><input type="text" name="loag" value="<?=$r['loag'];?>"></td>
    </tr>
    <tr>
        <td>上映日期</td>
        <td>
        <select name="year" value="<?=$r['year'];?>">
        <?php
    for ($i=0; $i < 3; $i++) { 
    if($r['year']==(date("Y")+$i)){
        echo "<option selected>".(date("Y")+$i)."</option>";
    }else{

        echo "<option>".(date("Y")+$i)."</option>";
    }
    }
        ?>
        </select>年
        <select name="month" id="">
        <?php
    for ($i=1; $i < 13; $i++) { 
    if($r['month']==$i){
        echo "<option selected>".$i."</option>";
    }else{
      echo "<option>".$i."</option>";
    }
}
        ?>
        </select>月
        <select name="day" id="">
        <?php
    for ($i=1; $i < 32; $i++) { 
        if($r['day']==$i){
            echo "<option selected>".$i."</option>";
        }else{
          echo "<option>".$i."</option>";
        }
    }
        ?>
        </select>日
        </td>
    </tr>
    <tr>
        <td>發行商</td>
        <td><input type="text" name="ord" value="<?=$r['ord'];?>"></td>
    </tr>
    <tr>
        <td>導演:</td>
        <td><input type="text" name="man" value="<?=$r['man'];?>"></td>
    </tr>
 
    <tr>
        <td>電影海報:</td>
        <td>
        <input type="file" name="img" id="">
        </td>
    </tr>
    <tr>
        <td>預告影片:</td>
        <td>
        <input type="file" name="av" id="">
        </td>
    </tr>
    <tr>
        <td>劇情簡介</td>
        <td>
        <textarea name="text" style="height:60px;width:300px"><?=$r['text'];?></textarea>
        </td>
    </tr>
    </table>
    <div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    
    </div></form>
    
    </div>
</div>
</div>