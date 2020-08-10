<div>
<h5>目前位置:首頁 > 分類網誌 > <span id="flag"></span></h5>
<div>
<fieldset style="width:30%;display: inline-block;">
    <legend>分類網誌</legend>
    <div onclick="getop(1)">健康新知</div>
    <div onclick="getop(2)">菸害防治</div>
    <div onclick="getop(3)">癌症防治</div>
    <div onclick="getop(4)">慢性病防治</div>
</fieldset>
<fieldset class="opfi"  id='op1'>
    <legend>文章列表</legend>
    <div id='op1t'></div>
 
</fieldset>
<fieldset class="opfi" id="op2" style="display: none;">
    <legend id='op2n'>分類網誌</legend>
    <div id='op2t'></div>


</fieldset>

</div>


<script>
getop(1)
function getop(type) {
switch (type) {
    case 1:
        $('#flag').html('健康新知')
        break;
    case 2:
        $('#flag').html('菸害防治')
        break;
    case 3:
        $('#flag').html('癌症防治')
        break;
    case 4:
        $('#flag').html('慢性病防治')
        break;
}
    $.post('./api/getop.php',{type},(e)=>{
        $('#op1t').html(e);
        $('.opfi').hide();
        $('#op1').show()
    })
}
function getop2(id) {
    $.post('./api/getop2.php',{id},(e)=>{
        $('#op2t').html(e.text);
        $('#op2n').html(e.name);
        $('.opfi').hide();
        $('#op2').show()
    },'json')
}
</script>


