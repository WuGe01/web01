<?php
$r=find("ord",$_GET['id']);
?>
<h1 class="ct">
    <?=$r['no'];?>
</h1>
<table class="mauto w-80 pp">
<tr>

   <td style="background:#EF7429">登入帳號</td>
   <td colspan="4"><?=$r['acc'];?>
  
</td>
   
</tr>
<tr>
   <td style="background:#EF7429">姓名</td>
   <td colspan="4">
      <input type="text" name="name" value="<?=$r['name'];?>">
      
   </td>

</tr>
<tr>
   <td style="background:#EF7429">電子信箱</td>
   <td colspan="4">
   <input type="text" name="mil" value="<?=$r['mil'];?>">
   </td>
   
</tr>
<tr>
   <td style="background:#EF7429">聯絡住址</td>
   <td colspan="4">
   <input type="text" name="addr" value="<?=$r['addr'];?>">
   </td>
   
</tr>
<tr>
   <td style="background:#EF7429">連絡電話</td>
   <td colspan="4">
   <input type="text" name="tel" value="<?=$r['tel'];?>">
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
$r['total']=unserialize($r['total']);
$r['gno']=unserialize($r['gno']);
$r['gname']=unserialize($r['gname']);
$r['gat']=unserialize($r['gat']);
$r['gprice']=unserialize($r['gprice']);
foreach ($r['gno'] as $key => $value) {
$sum+=$r['total'][$key];
?>
<tr>
   <td><?=$value;?></td>

   <td><?=$r['gname'][$key];?></td>

   <td><?=$r['gat'][$key];?></td>

   <td><?=$r['gprice'][$key];?></td>

   <td><?=$r['total'][$key];?></td>
 
</tr>
<?php
}

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
   <input type="button" onclick="location.replace('back.php?do=ord')" value="返回">
</div>