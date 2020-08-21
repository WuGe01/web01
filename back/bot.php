<h1 class="ct">編輯頁尾版權區</h1>
<?php
$r=find("bot",1);
?>
<form action="./api/add.php?table=bot" method="post">
<table class="muto w-80">
    <tr>
        <td class="tt p20">頁尾內容宣告</td>
        <td class="pp p20"><input type="text" name="text" id="bot" value="<?=$r['text'];?>">
        <input type="hidden" name="id" value="1">
    </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="button" value="重置" onclick="noval()">
</div>
</form>
<script>
    function noval() {
        $("#bot").val(``);
    }
</script>