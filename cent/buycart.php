<?php
if(empty($_SESSION['login']))to("index.php?do=login");
if(!empty($_POST)){
    $_SESSION['cart'][$_POST['id']]+=$_POST['qt'];
}
?>
<form action="./api/ord.php" method="post">
<h1 class="ct"><?=$_SESSION['login'];?>的購物車</h1>
<table class="mauto w-80">
<tr class="tt p20 ct">
    <td>編號</td>
    <td>商品名稱</td>
    <td>數量</td>
    <td>庫存量</td>
    <td>單價</td>
    <td>小記</td>
    <td>刪除</td>
</tr>
<?php
foreach ($_SESSION['cart'] as $id => $qt) {
    # code...
$r=find("good",$id)
?>
<tr class="pp p20">
    <td><?=$r['no'];?></td>
    <input type="hidden" name="no[]" value="<?=$r['no'];?>">
    <td><?=$r['name'];?></td>
    <input type="hidden" name="name[]" value="<?=$r['name'];?>">
    <td><?=$qt;?></td>
    <input type="hidden" name="qt[]" value="<?=$qt;?>">
    <td><?=$r['qt'];?></td>
    <input type="hidden" name="price[]" value="<?=$r['price'];?>">
    <input type="hidden" name="toid[]" value="<?=$r['id'];?>">
    <td><?=$r['price'];?></td>
    <td><?=$r['price']*$qt;?></td>
    <td>
        <img src="./img/0415.jpg" onclick="delcur(<?=$id;?>)">
    </td>


</tr>
<?php
}
?>
</table>
<div class="ct">
<a href="index.php">
    <img src="./img/0411.jpg" alt="">
</a>
<label for="XCC">
    <img src="./img/0412.jpg" alt="">
    <input type="submit" id="XCC" style="display: none;">
</label>
</div></form>
<script>
    function delcur(e) {

        $.post("./api/unset.php",{e},()=>{

            location.reload();
        })
    }
</script>