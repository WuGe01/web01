<div>
<fieldset style="margin:50px;">
    <legend>目前位置:首頁 > 問卷調查區</legend>
    <table >
    <tr>
        <td style="width:5%">編號</td>
        <td style="width:65%">內容</td>
        <td style="width:10%">投票</td>
        <td style="width:10%">結果</td>
        <td style="width:10%">狀態</td>
    </tr>
<?php
$rows=all('que',['parent'=>0]);
$ii=1;
foreach ($rows as $r) 
{
$a="select sum(power) FROM que WHERE parent = ".$r['id'];

?>
    <tr>
        <td><?=$ii;?></td>
        <td><?=$r['name'];?></td>
        <td><?=q($a);?></td>
        <td><a href="?do=Qend&id=<?=$r['id'];?>">結果</a></td>
        <td>
            <?=(!empty($_SESSION['login']))?"<a href='?do=PQend&id=".$r['id']."'>參與投票</a>":"請先登入";?>
        </td>
    </tr>
    

<?php
$ii++;
}
?>

</table>

</fieldset>

</div>