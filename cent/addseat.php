<?php
if(!empty($_POST)){
    $_POST['qt']=count($_POST['seat']);
    $_POST['no']=date("Ymdhis");
    $_POST['seat']=json_encode($_POST['seat']);
    save('qt',$_POST);
    $_POST['seat']=json_decode($_POST['seat']);

}
?>
<div id="mm">

</div>