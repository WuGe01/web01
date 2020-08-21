<?php
$no=date("Ymd").rand(000000,999999);
?>
<h1 class="ct"></h1>
<?php

print_r($_POST);
foreach ($_POST['no'] as $key => $value) {
   $data['no']=$value;
   $data['name']=$_POST['name'][$key];
   $data['qt']=$_POST['qt'][$key];
   $data['price']=$_POST['price'][$key];
   $data['toid']=$_POST['toid'][$key];
   $data['accid']=$_SESSION['login'];
   save("ord",$data);

}
// unset($_SESSION['cart']);
?>
