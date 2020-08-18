<?php
$date=date("Y-m-d");
$ondate=date("Y-m-d",strtotime("-2day"));
$rows=all("movie",['sh'=>1]," && `ondat` >= '".$ondate."' && `ondat` <= '".$date."'");
$_GET['id']=(!empty($_GET['id']))?$_GET['id']:0;

?>
<div id="mm" class="red">
  <div id='fl1' >
  <h3 class="ct">線上訂票</h3>
  <form action="?do=addseat" method="post">
  <table class="byTable" border='1'>
    <tr>
      <td width="20%">電影:</td>
      <td>
        <select name="name" id="">
<?php
foreach ($rows as $r) {
  if($_GET['id']==$r['id']){
    echo "<option selected value='".$r['id']."'>".$r['name']."</option>";

  }else{
    echo "<option value='".$r['id']."'>".$r['name']."</option>";
    }
}
?>

        </select>
      </td>
    </tr>
    <tr>
      <td>日期:</td>
      <td>
      <select name="sdat" id="">
        </select>
      </td>
    </tr>
    <tr>
      <td>場次:</td>
      <td>
      <select name="type" id="">
        </select>
      </td>
    </tr>

  </table>
  <div class="ct mt-10" >
    <input type="button" value="確認" onclick="fl()">
    <input type="reset" value="重置">
  </div>
  </div>
  </div>

  <div id='fl2'  class="fl" style="display:none">
  <img src="./img/03D04.png" alt="">
  <div class="bddd">
<?php
for ($i=0; $i <20 ; $i++) { 
  $kk=ceil(($i+1)/5);
  $k=(($i)%5)+1;
?>
<div class='d64'>
  <span class="sett"><?=$kk;?>排<?=$k;?>號</span>

  <img class='setpm' src='./img/03D02.png' >
  <input type="checkbox" name="seat[]" value="<?=$i+1?>" class='setp' onclick="imgC(this)">

  
  </div>
<?php
}
?>
    

  </div>
  <hr>
  <div>您選擇的電影是:
    <span class="tof"></span></div>
  <div>您選擇的時刻是: <span class="tof"></span></div>
  <div>您以勾選<span class="tof">0</span>張票，最多可以購買4張票</div>
  <div class="ct">
  <input type="submit" value="訂購">
  <input type="button" value="上一步" onclick="fl()">

  </div></form>
  </div>
<script>
let id=$("select[name='name']")[0].value;
$.post("./api/getdat.php",{id},(e)=>{
      $("select[name='sdat']").html(e);
      gettype()
})
$("select[name='name']").change(()=>{
  getdat()
})
$("select[name='sdat']").change(()=>{
  gettype() 
})
function gettype(){
    let name=$("select[name='name']")[0].value;
    let sdat=$("select[name='sdat']")[0].value;
 
    $.post("./api/gettype.php",{name,sdat},(e)=>{
      $("select[name='type']").html(e);
      let kkk=$("select[name='name']")[0].value
      let tof1=$("select[name='name']").find(`option[value='${kkk}']`).html()
      let tof2=$("select[name='sdat']")[0].value;
      let tof3=$("select[name='type']")[0].value;
      $(".tof").eq(0).html(tof1)
      $(".tof").eq(1).html(`${tof2} ${tof3}`)
    })
}
function getdat(){
  let id=$("select[name='name']")[0].value;
    $.post("./api/getdat.php",{id},(e)=>{
      $("select[name='sdat']").html(e);
      gettype() 
    })
}
function fl() {
  $("#fl1").toggle()
  $("#fl2").toggle()
  let name=$("select[name='name']")[0].value;
  let sdat=$("select[name='sdat']")[0].value;
  let type=$("select[name='type']")[0].value;
  $.post("./api/getseat.php",{name,sdat,type},(e)=>{
    console.log(e)
    for (let i = 0; i < e.length; i++) {
      $(".setp").eq(e[i]).hide();
      $(".setpm").eq(e[i])[0].src="./img/03D03.png";

      
    }
  
  },"json")
}
let chk=0;
function imgC(e) {

  console.log($(e).prop("checked"))
  if($(e).prop("checked")==true){
    chk++
    $(e).parent('div').find("img")[0].src="./img/03D03.png"
    if(chk>4){
    chk=4;
    alert("您最多一次只能訂五張票")
    $(e).prop("checked",false)
  }
  }else{
    chk--;
    $(e).parent('div').find("img")[0].src="./img/03D02.png"
  }
  
  $(".tof").eq(2).html(chk)
}
</script>
