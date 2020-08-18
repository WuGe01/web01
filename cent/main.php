  <div id="mm">
    <div class="half" style="vertical-align:top;">
      <h1>預告片介紹</h1>
      <div class="rb tab" style="width:95%;">
        <div id="abgne-block-20111227">
          <div class="mainBimg">
<?php
$rows=all('pop',['sh'=>1],' order by ord');
foreach ($rows as $r) {
?>
<div class="popimg"> 
  <img src="./img/<?=$r['name'];?>" class="popBimg">
  <input type="hidden" name="type" value="<?=$r['type'];?>">
  <div class="popBdiv"><?=$r['text'];?></div>
</div>

<?php
  }
?>
            
          </div>

      <div class='popbt'>
      <img src="./img/箭頭-01.jpg" onclick="ahift(0)" style="width:10px;margin-top: 55px;height:10px">
      <div class="nav">
<?php
 $rows=all('pop',['sh'=>1],' order by ord');
 $pp=0;
foreach ($rows as $r) {



?>
      <div class="icon">
      <img src="./img/<?=$r['name'];?>" class="popMimg" onclick="mtob(<?=$pp;?>)">
      </div>
<?php
$pp++;
}
?>
      </div>

      <img src="./img/箭頭-02.jpg" onclick="ahift(1)" style="width:10px;margin-top: 55px;height:10px">
      </div>

        </div>
      </div>
    </div>

    <div class="half">
      <h1>院線片清單</h1>
      <div class="rb tab flexmain" style="width:95%;">
      <div class="flexmain">
<?php
$date=date("Y-m-d");
$ondate=date("Y-m-d",strtotime("-2day"));
$total=col("movie",['sh'=>1]," && `ondat` >= '".$ondate."' && `ondat` <= '".$date."'");
$mix=4;
$now=(!empty($_GET['p']))?$_GET['p']:1;
$start=($now-1)*$mix;
$page=ceil($total/$mix);
$rows=all("movie",['sh'=>1]," && `ondat` >= '".$ondate."' && `ondat` <= '".$date."' limit ".$start.",".$mix."");
foreach ($rows as $r) {

?>
<fieldset class="fimain">
  <div>片名:<?=$r['name'];?></div>
  <table style="width:100%">
<tr>
  <td>
<img src="./img/<?=$r['img'];?>" style="width:60px">
  </td>
  <td>
  <div>分級:

    <img src="./img/03C0<?=$r['level'];?>.png" style="width:20px"><br>
<?php
switch ($r['level']) {
  case 1:
    echo "普遍級";
    break;
  case 2:
    echo "保護級";
    break;
  case 3:
    echo "輔導級";

    break;
  case 4:
    echo "限制級";

    break;
  

}

?>
  </div>
  <div>上映日期:<br>
    <?=$r['ondat'];?></div>
  </td>
</tr>
</table>
  <div>
    <a href="?do=info&id=<?=$r['id'];?>">
      <input type="button" value="劇情簡介">

    </a>
    <a href="?do=buyp&id=<?=$r['id'];?>">
    <input type="button" value="線上訂票"></a>
  </div>
</fieldset>

<?php
}
?>
</div>
<div class="ctmovie">
  <a href="?do=main&p=<?=(($now-1)>0)?($now-1):1;?>"><</a>
 <?php
 for ($i=1; $i <=$page ; $i++) { 
   if($i==$now){

     echo "<a style='font-size: 20px;' href='?do=main&p=".$i."'>".$i."</a>";
   }else{
     echo "<a href='?do=main&p=".$i."'>".$i."</a>";
   }
 }

 ?> 

  <a href="?do=main&p=<?=(($now+1)<$page)?($now+1):$page;?>">></a>

      </div>
      </div>
    </div>
    
  </div>
<script>
let ii=0;
$(".popimg").hide();
$(".popimg").eq(0).show();
let autochg=setInterval(() => {
  chgpage()
}, 3000);
$(".nav").hover(
  function () {
clearInterval(autochg)

  },  function () {
  autochg=setInterval(() => {
  chgpage()
}, 3000);
  }
  )
function chgpage() {
  let e=$(".popimg").eq(ii).find("input[name='type']")[0].value*1
  let max=$(".popimg").length
  let kk=ii+1
  if(ii+1==max)kk=0
  // console.log(e,ii,kk)
  switch (e) {
    case 1:
    $(".popimg").eq(ii).fadeOut(2000);
    $(".popimg").eq(kk).fadeIn(2000);
      break;
    case 2:
    $(".popimg").eq(ii).slideUp(1000,()=>{
      $(".popimg").eq(kk).slideDown(1000);
    });
      break;
    case 3:
    $(".popimg").eq(ii).hide(1000,()=>{
      $(".popimg").eq(kk).show(1000);
    });
  }
  ii=kk;
}
let move=0;
let page=$('.icon').length;

function ahift(e) {

  switch (e) {
      case 1:
        if(move<(page-4)){
          move++
          $('.icon').animate({right:move*95},500)
        }
        break;
      case 0:
        if(move>0){
          move--
          $('.icon').animate({right:move*95},500)
        }
        break;
    }
}
function mtob(e) {
  ii=e;
  $(".popimg").hide();
  $(".popimg").eq(e).show()
}
</script>