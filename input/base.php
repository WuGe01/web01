<?php
date_default_timezone_set("Asia/Taipei");
session_start();
$dns="mysql:host=localhost;charset=utf8;dbname=db01";
$pdo=new PDO($dns,"root","'");
function all($table,...$a){
    global $pdo;
    $t=[];
    $s="select * from ".$table." where ";
    if(is_array($a[0]) && !empty($a[0])){
        foreach ($a[0] as $key => $value) {
          $t[]=sprintf("`%s`='%s'",$key,$value) ;
        }
        $s.=join(" , ",$t);
    }
    if(!empty($a[1]))$s.= $a[1];
    return $pdo->query($s)->fetchAll(FETCH_ASSOC);
}
function find($table,$a){
    global $pdo;
    $t=[];
    $s="select * from ".$table." where ";
    if(is_array($a)){
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value) ;
          }
          $s.=join(" , ",$t);
    }else{
        $s.=" `id` ='".$a."'";
    }
    return $pdo->query($s)->fetch(FETCH_ASSOC);
}
function col($table,$a){
    global $pdo;
    $t=[];
    $s="select count(*) from ".$table." where ";
    if(is_array($a)){
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value) ;
          }
          $s.=join(" , ",$t);
    }else{
        $s.=" `id` ='".$a."'";
    }
    return $pdo->query($s)->fetchColumn();
}
function del($table,$a){
    global $pdo;
    $t=[];
    $s="delete from ".$table." where ";
    if(is_array($a)){
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value) ;
          }
          $s.=join(" , ",$t);
    }else{
        $s.=" `id` ='".$a."'";
    }
    return $pdo->exec($s);
}
function save($table,$a){
    global $pdo;
    $t=[];
    if(!empty($a['id'])){
        $s="update ".$table." set ";
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value) ;
          }
          $s.=join(" , ",$t)." where id='".$a['id']."'";
    }else{
        $s="insert into ".$table." ";
        $t1=[];
        $t2=[];
        foreach ($a as $key => $value) {
            $t1[]=sprintf("`%s`",$key) ;
            $t2[]=sprintf("'%s'",$value) ;
          }
        $s.="(`".join("`,`",$t1)."`) values ('".join("','",$t2)."')";
    }
    return $pdo->exec($s);
}
function q($s){
    return $pdo->query($s)->fetchAll(FETCH_ASSOC);
}
function to($a){
    header("location:".$a."");
}
?>