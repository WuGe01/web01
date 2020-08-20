<?php
date_default_timezone_set("Asia/Taipei");
session_start();
$pdo=new POD("mysql:host=localhost;charset=utf8;dbname=web04","root","");
function all($table,...$a){
    global $pdo;
    $s="select * from ".$table." ";
    $t=[];
    if(!empty($a[0]) && is_array($a[0])){
        foreach ($a[0] as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && ",$t);
    }
    if(!empty($a[1])){
        $s.=$a[1];
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
        $s.=" where ".join(" && ",$t);
    }else{
        $s.=" where id='".$a."'";
    }
    
    return $pdo->query($s)->fetch(PDO::FETCH_ASSOC);
}
function del($table,$a){
    global $pdo;
    $s="delete * from ".$table." ";
    $t=[];
    if(is_array($a)){
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && ",$t);
    }else{
        $s.=" where id='".$a."'";
    }
    
    return $pdo->exec($s);
}
function col($table,...$a){
    global $pdo;
    $s="select count(*) from ".$table." ";
    $t=[];
    if(!empty($a[0]) && is_array($a[0])){
        foreach ($a[0] as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && ",$t);
    }
    if(!empty($a[1])){
        $s.=$a[1];
    }
    return $pdo->query($s)->fetchColumn();
}
function save($table,$a){
    global $pdo;
    if(!empty($a['id'])){
        $s="update ".$table." set ";
        $t=[];
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=join(" , ",$t)." where id='".$a['id']."'";
    }else{
        $s="insert into ".$table." ";
        $t1=[];
        $t2=[];
        foreach ($a as $key => $value) {
            $t1[]=sprintf("`%s`",$key);
            $t2[]=sprintf("'%s'",$value);
        }
        $s="(".join(" , ",$t1).") values (".join(" , ",$t2).")";
    }
    return $pod->exec($s);
}
function to($a){
    header("location:".$a."");
}
function q($s){
    global $pdo;
    return $pdo->query($s)->fetchAll(PDO::FETCH_ASSOC);
}
?>