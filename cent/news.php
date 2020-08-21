<h1 class="ct">最新消息</h1>
<table class="mauto w-80" id="news01">
<tr>
    <td class="ct p20 tt">標題</td>
</tr>
<tr>

    <td class="pp p20"  onclick="newsput(2)">年終特賣會開跑了</td>
</tr>
<tr>
    <td class="pp p20"  onclick="newsput(3)">情人節特惠活動</td>

</tr>
</table>


<table class="mauto w-80" id="news02">
<tr>
    <td class="ct p20 tt" style="width:100px">標題</td>
    <td class="pp p20">年終特賣會開跑了</td>
</tr>
<tr>
    <td class="ct p20 tt">內容</td>
    <td class="pp p20">即日期至年底，凡會員購物滿仟送佰，買越多送越多~
</td>
</tr>

</table>

<table class="mauto w-80" id="news03">
<tr>
    <td class="ct p20 tt"  style="width:100px">標題</td>
    <td class="pp p20">情人節特惠活動</td>
</tr>
<tr>
    <td class="ct p20 tt">內容</td>
    <td class="pp p20">為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~</td>
</tr>

</table>
<div class="ct" id="news04"><button onclick="newsput(1)">返回</button></div>

<script>
newsput(1)
function newsput(e) {
    $("#news01").hide()
    $("#news02").hide()
    $("#news03").hide()
    $("#news04").hide()
    switch (e) {
        case 1:
          $("#news01").show()

            break;
    
        case 2:
            $("#news02").show()  
            $("#news04").show()
            break;
        case 3:
            $("#news03").show()  
            $("#news04").show()
            break;

    }
}
</script>