<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">進站人數管理</p>
        <form method="post" action="./api/save.php?title=total">
    <table width="100%">
    	<tbody><tr>
<?php
$row=find('total',1);


?>
            <td  class="y ct" width="45%">進站人數</td>
            <td  width="45%"><input style="width:90%" type="text" name="text" value="<?=$row['text'];?>"></td>
            <input type="hidden" name="id" value="<?=$row['id'];?>">

            </tr>

    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
</div>

