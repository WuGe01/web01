<div>
目前位置 : 首頁 > 分類網誌 > <span id="t2flag"></span>
</div>
<fieldset class="pofi" style="width:30%">
    <legend>分類網誌</legend>
    <div onclick="getpo(1)">健康新知</div>
    <div onclick="getpo(2)">菸害防治</div>
    <div onclick="getpo(3)">癌症防治</div>
    <div onclick="getpo(4)">慢性病防治</div>
</fieldset>
<fieldset class="pofi" style="width:61%">
    <legend  id="t3flag">文章類表</legend>
    <div id="t4flag"></div>

</fieldset>
<script>
getpo(1)
function getpo(e) {
    switch (e) {
        case 1:
          $('#t2flag').html("健康新知")  

          break;
        case 2:
            $('#t2flag').html("菸害防治")  
            break;
        case 3:
            $('#t2flag').html("癌症防治")  
            break;
        case 4:
            $('#t2flag').html("慢性病防治")  
            break;
    }
    let tpye=e;
    $.post("./api/getpo.php",{tpye},(k)=>{
        $('#t4flag').html(k);
        $('#t3flag').html("文章類表");
    })
}
function getmore(e){
    $('.zzz').hide()
    $(`#X${e}`).show()
    let k=$(`#Z${e}`).html()
    $('#t3flag').html(k);

}
</script>