<div>
<form action="./api/addQ.php" method="post">
<fieldset style="margin:50px;">
<legend>新增問卷</legend>
<div><span class="step">問卷名稱</span><input type="text" name="name"></div>
<div id="ft">
<div>選項：
    <input type='text' name='Sname[]' >
    <input type="button" value="更多" onclick="more()">
</div>
</div>
<div>
    <input type="submit" value="新增">|
    <input type="button" value="清空" onclick="location.replace('back.php?do=que')">
</div>
</fieldset>
</form>
</div>