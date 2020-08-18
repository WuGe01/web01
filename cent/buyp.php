<?php
$date=date("Y-m-d");
$ondate=date("Y-m-d",strtotime("-2day"));
$rows=all("movie",['sh'=>1]," && `ondat` >= '".$ondate."' && `ondat` <= '".$date."'");
$_GET['id']=(!empty($_GET['id']))?$_GET['id']:0;
?>
<div id="mm" class="red">
  <div id='fl1' >
  <h3 class="ct">線上訂票</h3>
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
      <select name="dat" id="">
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
?>
<div class='d64'>
  <div>座位</div>
  <img class='dimg' src='./img/03D03.png' ></div>
  <input type="checkbox" name="" id="">
<?php
}
?>
    

  </div>
  <hr>
  <div>您選擇的電影是:
    <span class="tof"></span></div>
  <div>您選擇的時刻是: <span class="tof"></span></div>
  <div>您以勾選<span class="tof"></span>張票，最多可以購買4張票</div>
  <div class="ct">
  <input type="submit" value="訂購">
  <input type="button" value="上一步" onclick="fl()">

  </div>
  </div>
<script>
let id=$("select[name='name']")[0].value;
$.post("./api/getdat.php",{id},(e)=>{
      $("select[name='dat']").html(e);
      gettype()
})
$("select[name='name']").change(()=>{
  getdat()
})
$("select[name='dat']").change(()=>{
  gettype() 
})
function gettype(){
    let id=$("select[name='name']")[0].value;
    let dat=$("select[name='dat']")[0].value;
    $.post("./api/gettype.php",{id,dat},(e)=>{
      $("select[name='type']").html(e);
      let kkk=$("select[name='name']")[0].value
      let tof1=$("select[name='name']").find(`option[value='${kkk}']`).html()
      let tof2=$("select[name='dat']")[0].value;
      let tof3=$("select[name='type']")[0].value;
      $(".tof").eq(0).html(tof1)
      $(".tof").eq(1).html(`${tof2} ${tof3}`)
    })
}
function getdat(){
  let id=$("select[name='name']")[0].value;
    $.post("./api/getdat.php",{id},(e)=>{
      $("select[name='dat']").html(e);
      gettype() 
    })
}
function fl() {
  $("#fl1").toggle()
  $("#fl2").toggle()
}
</script>
