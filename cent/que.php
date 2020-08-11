<fieldset>
    <legend>目前位置 : 首頁  > 問券調查</legend>
    <table>
        <tr>
            <td>編號</td>
            <td>問卷題目</td>
            <td>投票總數</td>
            <td>結果</td>
            <td>狀態</td>
        </tr>
<?php
$rows=all('que',['parent'=>0]);
$ii=1;
foreach ($rows as $r) {
    # code...

?>
        <tr>
            <td><?=$ii;?></td>
            <td><?=$r['name'];?></td>
            <td><?=$r['power'];?></td>
            <td><a href="?do=end&id=<?=$r['id'];?>">結果</a></td>
            <td>
<?php
if(!empty($_SESSION['login'])){
    echo "<a href='?do=vet&id=".$r['id']."'>參與投票</a>";
}else{
echo "請先登入";
}

?>

            </td>
        </tr>
<?php
$ii++;
}
?>
    </table>
</fieldset>