<?php
include_once "../input/base.php";
$chk=col("admin",['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($chk>0){
    $_SESSION['login']=$_POST['acc'];
    to("../backend.php");
    $r['text']=find('total',['id'=>1])['text'];
    $r['text']++;
    $r['id']=1;
    save('total',$r);
}else{
echo "<script>alert('帳號密碼錯誤')
location.replace('../index.php?do=login')
</script>";
}
?>
