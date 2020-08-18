<?php
include_once "../input/base.php";
// $_POST['name']="2";
// $_POST['sdat']="2020-08-18";
$date=date('Y-m-d');
$h=date('H');

if($h*1>22){
    $hk=5;
}elseif ($h*1>20) {
   $hk=4;
}elseif ($h*1>18) {
   $hk=3;
}elseif ($h*1>16) {
   $hk=2;
}elseif ($h*1>14) {
   $hk=1;
}else{
    $hk=0;
 }
// echo $hk;
for ($i=1; $i <=5 ; $i++) { 
$kk=20-(qc("sELECT sum(qt) FROM `qt` where sdat='".$_POST['sdat']."' && name='".$_POST['name']."' && type='".$se[$i]."'"));
// $kk
if($date==$_POST['sdat'] && $i<=$hk){

}else{

    echo "<option value='".$se[$i]."'>".$se[$i]." 剩餘座位數 ".$kk."</option>";
} 
  
}
?>