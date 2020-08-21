<?php
$r=find("good",$_GET['id']);
?>
<form action="index.php?do=buycart" method="post">
<h1 class="ct"><?=$r['name'];?></h1>
<table class="pp mauto w-80">
<tr>
    <td rowspan="5">
    <img src="./img/<?=$r['img'];?>" style="width:100%">
    </td>
    <td>
        分類:
        <?php
        echo find("th",$r['big'])['name'];
        echo ">";
        echo find("th",$r['mid'])['name'];
        ?>
    </td>
</tr>
<tr>
    <td>編號：<?=$r['no'];?></td>

</tr>
<tr>
    <td>價格:<?=$r['price'];?></td>

</tr>
<tr>
    <td>詳細說明<?=$r['info'];?></td>

</tr>
<tr>
    <td>庫存：<?=$r['qt'];?></td>

</tr>
<tr>
    <td colspan="2" class="ct" style="background:#EF7429;">
        購買數量
        <input type="hidden" name="id" value="<?=$r['id'];?>">
        <input type="number" name="qt" id="" min="1" max="<?=$r['qt'];?>" value='1'>
        <label for="XXX"> <img src="./img/0402.jpg" alt=""></label>
    </td>

</tr>
</table>
<div class="ct">
    <input type="button" value="返回" onclick="location.replace('index.php')">
</div>

    <input type="submit" id="XXX" style="display: none;">
</form>