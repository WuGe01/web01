<fieldset style="width:300px;margin:auto">
<div>請輸入信箱以查詢密碼</div>
<div><input type="text" name="mil" id=""></div>
<div id="tflag"></div>
<input type="button" value="尋找" onclick="chkmil()">
</fieldset>
<script>
function chkmil() {
    let mil=$("input[name='mil']").val();
    $.post("./api/chkmil.php",{mil},(e)=>{
        $('#tflag').html(e);
    })
}
</script>