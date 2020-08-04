<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">最新消息資料管理</p>
        <form method="post" action="./api/update.php?title=news">
    <table width="100%">
    	<tbody><tr class="yel">
            <td width="68%">最新消息資料內容</td>
            <td width="7%">顯示</td>
            <td width="7%">刪除</td>

            </tr>
<?php
$total=col('news','');
$mix=5;
$pape=ceil($total/$mix);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$genow=($now*1-1)*$mix;
$rows=all('news',[]," limit ".$genow.",".$mix."");
foreach ($rows as $r) {
$ischk=($r['sh']==1)?"checked":"";
?>
            <tr>
                <input type="hidden" name="id[]" value="<?=$r['id'];?>">

            <td><textarea name="text[]" id="" cols="80" rows="2"><?=$r['text'];?></textarea>
            </td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$ischk;?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>

            </tr>
<?php
}
?>
    </tbody></table>
    <div class="ct">
    <a class="aaa" href="backend.php?do=news&p=<?=($now*1-1>0)?($now*1-1):1;?>"><</a>
<?php
for ($i=1; $i <= $pape; $i++) { 
    if($i==$now){

        echo "<a class='aaa' style='font-size: 24px;' href='backend.php?do=news&p=".$i."'>".$i."</a>";
    }else{

        echo "<a class='aaa' href='backend.php?do=news&p=".$i."'>".$i."</a>";
    }
}
?>
    
    <a class="aaa" href="backend.php?do=news&p=<?=($now*1+1<$pape)?($now*1+1):$pape;?>">></a>
    
    </div>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=title')" value="新增最新消息"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
</div>


<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
    <h2 class="ct">新增最新消息</h2>
    <form action="./api/save.php?title=news" method="post" enctype="multipart/form-data">
    <div class="ct">
        最新消息文字內容：<br>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div></form>
    </div>
    </div>
</div>

