<?php
$r=find('movie',$_GET['id']);
?>
<div id="mm">
    <div class="tab rb" style="width:87%;">
      <div style="background:#FFF; width:100%; color:#333; text-align:left">
        <video src="./img/<?=$r['av'];?>" width="300px" height="250px" controls="" style="float:right;"></video>
        <font style="font-size:24px"> <img src="./img/<?=$r['img'];?>" width="200px" height="250px" style="margin:10px; float:left">
        <p style="margin:3px">影片名稱 ：<?=$r['name'];?>
        <a href="?do=buyp&id=<?=$r['id'];?>">

          <input type="button" value="線上訂票" style="margin-left:50px; padding:2px 4px" class="b2_btu">
        </a>
        </p>
        <p style="margin:3px">影片分級 ： <img src="../img/03C0<?=$r['level'];?>.png" style="display:inline-block;">
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
?> </p>
        <p style="margin:3px">影片片長 ： <?=$r['loag'];?>/分</p>
        <p style="margin:3px">上映日期 :<?=$r['ondat'];?></p>
        <p style="margin:3px">發行商 ： <?=$r['ord'];?></p>
        <p style="margin:3px">導演 ：<?=$r['man'];?> </p>
        <br>
        <br>
        <p style="margin:10px 3px 3px 3px; word-break:break-all"> 劇情簡介：<?=$r['text'];?><br>
        </p>
        </font>
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td align="center">
                <a href="?">

                  <input type="button" value="院線片清單" >
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>