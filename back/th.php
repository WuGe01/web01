<div>
<h1 class="ct">商品分類</h1>
<div class="ct">
    <form action="./api/add.php?table=th" method="post">
    新增大類分類:
    <input type="text" name="name" id="">
    <input type="hidden" name="parent" value="0">
    <input type="submit" value="新增">
    </form>
</div>
<div class="ct">
<form action="./api/add.php?table=th" method="post">
    新增中類分類:
    <select name="parent" id="">
<?php
$rows=all("th",['parent'=>0]);
foreach ($rows as $r) {
?>
<option value="<?=$r['id']?>"><?=$r['name']?></option>
<?php
}
?>
    </select>
    <input type="hidden" name="sh" value="1">
    <input type="text" name="name" id="">
    <input type="submit" value="新增">
    </form>
</div>

<table style="width:100%">
<?php
foreach ($rows as $r) {

?>
<tr>
    <td class="w-70 p20 tt"  id="X<?=$r['id'];?>"><?=$r['name'];?></td>
    <td class="w-30 p20 tt">
    <input type="button" value="修改" onclick="edit('th',<?=$r['id'];?>)">
    <input type="button" value="刪除" onclick="del('th',<?=$r['id'];?>)">
    </td>
</tr>
<?php
$fows=all("th",['parent'=>$r['id']]);
foreach ($fows as $f) {
    ?>
    <tr>
        <td class="w-70 p20 pp" id="X<?=$f['id'];?>"><?=$f['name'];?></td>
        <td class="w-30 p20 pp">
        <input type="button" value="修改" onclick="edit(this,<?=$f['id'];?>)">
        <input type="button" value="刪除" onclick="del('th',<?=$f['id'];?>)">
        </td>
    </tr>
    <?php
}
}
?>
</table>
</div>
<div>
<h1 class="ct">商品管理</h1>
<div class="ct">
    <a href="back.php?do=addgood">
        <input type="button" value="新增商品">
    </a>
</div>
<table style="width:100%">
<tr class="ct">
    <td class="p20 tt">編號</td>
    <td class="p20 tt">商品名稱</td>
    <td class="p20 tt">庫存量</td>
    <td class="p20 tt">狀態</td>
    <td class="p20 tt">操作</td>
</tr>
<?php
$rows=all("good","");
foreach ($rows as $r) {

?>
<tr>
    <td class="w-10 p20 pp" ><?=$r['no'];?></td>
    <td class="w-30 p20 pp" ><?=$r['name'];?></td>
    <td class="w-10 p20 pp" ><?=$r['qt'];?></td>
    <td class="w-20 p20 pp" ><?=($r['sh']==1)?"販售中":"已下架";?></td>
    <td class=" p20 pp">
        <a href="back.php?do=editgood&id=<?=$r['id'];?>">
            <input type="button" value="修改" >
        </a>
    <input type="button" value="刪除" onclick="del('good',<?=$r['id'];?>)"><br>
    <input type="button" value="上架" onclick="sh('good',<?=$r['id'];?>,1)">
    <input type="button" value="下架" onclick="sh('good',<?=$r['id'];?>,0)">
    </td>
</tr>
<?php
}
?>
</table>
</div>




<script>
    function edit(e,id) {
        $.post("./api/fix.php",{id},(k)=>{
            // console.log(k)
           $(`#X${id}`).html(k);
        })
    }
</script>