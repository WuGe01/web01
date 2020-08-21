<?php
if(!empty($_GET['type'])){
    switch ($_GET['type']) {
        case 'big':
        $b=find('th',$_GET['val']);
            echo "<h1>".$b['name']."</h1>";       
            break;
        case 'mid':
        $b=find('th',$_GET['val']);
        $p=find('th',$b['parent']);
            echo "<h1>".$p['name'].">".$b['name']."</h1>";
            break;
    }
    $rows=all("good",[$_GET['type']=>$_GET['val']]);
}else{
echo "<h1>全部商品</h1>";
$rows=all("good","");
}
?>

<table class="pp mauto w-80">
<?php
foreach ($rows as $r) {
?>
    <tr>
        <td width="40%" rowspan="4">
            <img src="./img/<?=$r['img'];?>" style="width:100%">
        </td>
        <td width="60%" class="tt ct" style="background:#EF7429;">
        <?=$r['name'];?>
        </td>
    </tr>
    <tr>
        <td>價格：<?=$r['price'];?>
    <a style="float:right" href="index.php?do=more&id=<?=$r['id'];?>">
        <img src="./img/0402.jpg" alt="">
    </a>
    
    </td>

    </tr>
    <tr>
        <td>規格:<?=$r['level'];?></td>
  
    </tr>
    <tr>
        <td>簡介:<?=$r['info'];?></td>

    </tr>
<?php
}
?>
</table>