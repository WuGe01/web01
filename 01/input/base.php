<?php
date_default_timezone_set("Asia/Taipei");
session_start();
$pdo=new PDO("mysql:host=localhost;charset=utf8;dbname=db01-1","root","");

function all($table,...$a){
    global $pdo;
    $s="select * from ".$table." ";
    $t=[];
    if(is_array($a[0]) && !empty($a[0])){
        foreach ($a[0] as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && " ,$t);
    }
    if(!empty($a[1])){
        $s.=" ".$a[1];
    }
    return $pdo->query($s)->fetchAll(PDO::FETCH_ASSOC);
}
function find($table,$a){
    global $pdo;
    $s="select * from ".$table." ";
    $t=[];
    if(is_array($a)){
        foreach ($a as $key => $value) {
        $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && " ,$t);
    }else{
        $s.=" where id='".$a."'";
    }
    return $pdo->query($s)->fetch(PDO::FETCH_ASSOC);
}
function del($table,$a){
    global $pdo;
    $s="delete  from ".$table." ";
    $t=[];
    if(is_array($a)){
        foreach ($a as $key => $value) {
        $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && " ,$t);
    }else{
        $s.=" where id='".$a."'";
    }
    return $pdo->exec($s);
    // echo $s;

}
function col($table,$a){
    global $pdo;
    $s="select count(*) from ".$table." ";
    $t=[];
    if(is_array($a)){
        foreach ($a as $key => $value) {
        $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && " ,$t);
    }else{
        $s.=$a;
    }
    // echo $s;
    return $pdo->query($s)->fetchColumn();
}
function save($table,$a){
    global $pdo;
    $t=[];
    if(!empty($a['id'])){
        $s="update ".$table." set ";
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" ".join(" , " ,$t)." where id = '".$a['id']."'";
    }else{
        $s="insert into ".$table." ";
        $t1=[];
        $t2=[];
        foreach ($a as $key => $value) {
            $t1[]=sprintf("`%s`",$key);
            $t2[]=sprintf("'%s'",$value);
        }
        $s.=" (".join(" , " ,$t1).") values (".join(" , " ,$t2).")";
    }
    return $pdo->exec($s);
    // echo $s;
}
function q($s){
    return $pdo->query($s)->fetchAll(PDO::FETECH_ASSOC);
}
function to($a){
    header("location:".$a."");
}
?>