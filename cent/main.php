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
      <!-- <div class='popbt'>
      <img src="./img/箭頭-01.jpg" style="width:10px;margin-top: 55px;height:10px">
      <img src="./img/03A01.jpg" class="popMimg">
      <img src="./img/03A02.jpg" class="popMimg">
      <img src="./img/03A03.jpg" class="popMimg">
      <img src="./img/03A04.jpg" class="popMimg">
      <img src="./img/箭頭-02.jpg" style="width:10px;margin-top: 55px;height:10px">
      </div> -->

        </div>
      </div>
    </div>
    <div class="half">
      <h1>院線片清單</h1>
      <div class="rb tab" style="width:95%;">
        <table>
          <tbody>
            <tr> </tr>
          </tbody>
        </table>
        <div class="ct"> </div>
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
function chgpage() {
  let e=$(".popimg").eq(ii).find("input[name='type']")[0].value*1
  let max=$(".popimg").length
  let kk=ii+1
  if(ii+1==max)kk=0
  // console.log(e,ii,kk)
  switch (e) {
    case 1:
    $(".popimg").eq(ii).fadeOut(2000);
    $(".popimg").eq(ii+1).fadeIn(2000);
      break;
    case 2:
    $(".popimg").eq(ii).slideUp(1000,()=>{
      $(".popimg").eq(ii+1).slideDown(1000);
    });
      break;
    case 3:
    $(".popimg").eq(ii).hide(1000,()=>{
      $(".popimg").eq(ii+1).show(1000);
    });
  }
  ii=kk;
}
</script>