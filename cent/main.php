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