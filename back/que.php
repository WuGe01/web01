<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/addQ.php" method="post">
<div>

    問卷名稱
    <input type="text" name="name" id="">
</div>
 
        <div id="flag"></div>
        <div>

            選項:<input type="text" name="Sname[]" id="">
            <input type="button" value="更多" onclick="getmore()">
        </div>
        
<div class="ct">
<input type="submit" value="新增">|
<input type="button" value="清空" onclick="location.replace('?do=que')">
</div></form>
</fieldset>
<script>
function getmore() {
    $("#flag").append(`
    <div >
            選項:<input type="text" name="Sname[]" id="">
            
            </div>
    `)
}

</script>