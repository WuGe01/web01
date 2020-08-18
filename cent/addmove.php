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
    <tr>
        <td>片名:</td>
        <td>
        <input type="text" name="name" id="">
        </td>
    </tr>
    <tr>
        <td>分級:
        </td>
        <td>
        <select name="level" id="">
        <option value="1">普遍級</option>
        <option value="2">保護級</option>
        <option value="3">輔導級</option>
        <option value="4">限制級</option>
        </select>
        (普遍級、保護級、輔導級、限制級)
        </td>
    </tr>
    <tr>
        <td>片長:</td>
        <td><input type="text" name="loag" id=""></td>
    </tr>
    <tr>
        <td>上映日期</td>
        <td>
        <select name="year" id="">
        <?php
    for ($i=0; $i < 3; $i++) { 
      echo "<option>".(date("Y")+$i)."</option>";
    }
        ?>
        </select>年
        <select name="month" id="">
        <?php
    for ($i=1; $i < 13; $i++) { 
      echo "<option>".$i."</option>";
    }
        ?>
        </select>月
        <select name="day" id="">
        <?php
    for ($i=1; $i < 32; $i++) { 
      echo "<option>".$i."</option>";
    }
        ?>
        </select>日
        </td>
    </tr>
    <tr>
        <td>發行商</td>
        <td><input type="text" name="ord" id=""></td>
    </tr>
    <tr>
        <td>導演:</td>
        <td><input type="text" name="man" id=""></td>
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
        <textarea name="text" style="height:60px;width:300px"></textarea>
        </td>
    </tr>
    </table>
    <div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
    
    </div></form>
    
    </div>
</div>
</div>