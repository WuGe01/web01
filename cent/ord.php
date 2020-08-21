<?php
$no=date("Ymd").rand(000000,999999);
$ad=find("login",['acc'=>$_SESSION['login']]);
?>
<form action="./api/svaord.php" method="post">
<h1 class="ct"><?=$no;?>資料</h1>
<input type="hidden" name="no" value="<?=$no;?>">
<table class="mauto w-80 pp">
<tr>

   <td style="background:#EF7429">登入帳號</td>
   <td colspan="4"><?=$_SESSION['login'];?>
   <input type="hidden" name="acc" value="<?=$_SESSION['login'];?>">
</td>
   
</tr>
<tr>
   <td style="background:#EF7429">姓名</td>
   <td colspan="4">
      <input type="text" name="name" value="<?=$ad['name'];?>">
      
   </td>

</tr>
<tr>
   <td style="background:#EF7429">電子信箱</td>
   <td colspan="4">
   <input type="text" name="mil" value="<?=$ad['mil'];?>">
   </td>
   
</tr>
<tr>
   <td style="background:#EF7429">聯絡住址</td>
   <td colspan="4">
   <input type="text" name="addr" value="<?=$ad['addr'];?>">
   </td>
   
</tr>
<tr>
   <td style="background:#EF7429">連絡電話</td>
   <td colspan="4">
   <input type="text" name="tel" value="<?=$ad['tel'];?>">
   </td>
 
</tr>
<tr style="background:#EF7429">
   <td style="background:#EF7429">編號</td>
   <td style="background:#EF7429">商品名稱</td>
   <td style="background:#EF7429">數量</td>
   <td style="background:#EF7429">單價</td>
   <td style="background:#EF7429">小記</td>
</tr>
<?php
$sum=0;
foreach ($_POST['no'] as $key => $value) {
$sum+=$_POST['price'][$key]*$_POST['qt'][$key];
?>
<tr>
   <td><?=$value;?></td>
   <input type="hidden" name="gno[]" value="<?=$value;?>">
   <td><?=$_POST['name'][$key];?></td>
   <input type="hidden" name="gname[]" value="<?=$_POST['name'][$key];?>">
   <td><?=$_POST['qt'][$key];?></td>
   <input type="hidden" name="gat[]" value="<?=$_POST['qt'][$key];?>">
   <td><?=$_POST['price'][$key];?></td>
   <input type="hidden" name="gprice[]" value="<?=$_POST['price'][$key];?>">
   <td><?=$_POST['price'][$key]*$_POST['qt'][$key];?></td>
   <input type="hidden" name="total[]" value="<?=$_POST['price'][$key]*$_POST['qt'][$key];?>">
</tr>
<?php
}
unset($_SESSION['cart']);
?>
<tr>
   <td colspan="5" style="background:#EF7429">
      <div class="ct">
         總計為<?=$sum;?>
      </div>
   </td>

</tr>
</table>
<div class="ct">
   <input type="submit" value="確認送出">|
   <input type="button" onclick="location.replace('index.php')" value="返回">
</div>
</form>