
<fieldset >
<legend>目前位置 : 首頁  > 最新文章</legend>
    <table>
        <tr class="ct">
            <td style="width:300px;">標題</td>
            <td style="width:300px;">內容</td>
            <td>                <?php
    if(!empty($_SESSION['login'])){
   echo "人氣";
    }
                ?></td>
        </tr>
<?php
$tatal=col('po','');
$mix=5;
$page=ceil($tatal/$mix);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$start=($now-1)*$mix+1;
$SS=$start-1;
$rows=all("po",['sh'=>1]," limit $SS,$mix");

foreach ($rows as $r) {
    

?>
        <tr>
            <td style="background-color:#CCC" onclick="getnewmore(this)"><?=$r['name'];?></td>
            <td>
              <div><?=mb_substr($r['text'],0,20);?></div>
              <div style="display: none;"><?=$r['text'];?></div>  
                  
        </td>
            <td>
                <?php
    if(!empty($_SESSION['login']) && col("good",['acc'=>$_SESSION['login'],'toid'=>$r['id']])!=1){
        echo "<a href='./api/saygood.php?title=news&id=".$r['id']."'>讚</a>";
    }else{
echo "<a href='./api/saygooddel.php?title=news&id=".$r['id']."'>收回讚</a>";
    }
                ?>
            
            </td>
        </tr>
<?php
}
?>
    </table>
<div class="ct">
<a href="?do=news&p=<?=(($now-1)>0)?($now-1):1;?>"><</a>
<?php
for ($i=1; $i <= $page; $i++) { 
    if($i==$now){
        echo "<a style='font-size: 24px;' href='?do=news&p=".$i."'>".$i."</a>";
    }else{
        echo "<a href='?do=news&p=".$i."'>".$i."</a>";
    }
}

?>
<a href="?do=news&p=<?=(($now+1)<$page)?($now+1):$page;?>">></a>



</div>
</fieldset>


<script>
    function getnewmore(e) {
        $(e).parent("tr").find("div").eq(0).toggle()
        $(e).parent("tr").find("div").eq(1).toggle()
    }
</script>
