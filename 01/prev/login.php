<?php
if(!empty($_SESSION['login']))to("backend.php");
?>
<form method="post" action="./api/ckcacc.php" >
                        	    	<p class="t botli">管理員登入區</p>
                        			<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
                        	        <p class="cent">密碼 ： <input name="pw" type="password"></p>
                        	        <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
                        	    </form>