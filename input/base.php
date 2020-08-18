<?php
date_default_timezone_set("Asia/Taipei");
session_start();
$se=[
1=>"14:00~16:00",
2=>"16:00~18:00",
3=>"18:00~20:00",
4=>"20:00~22:00",
5=>"22:00~24:00"
];

$pdo=new PDO("mysql:host=localhost;charset=utf8;dbname=db003","root","");
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
function col($table,...$a){
    global $pdo;
    $s="select count(*) from ".$table." ";
    $t=[];
    if(is_array($a[0])){
        foreach ($a[0] as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=" where ".join(" && ",$t);
    }
    if(!empty($a[1])){
        $s.=$a[1];
    }
    
    return $pdo->query($s)->fetchColumn();
    // echo $s;
}
function del($table,$a){
    global $pdo;
    $s="delete from ".$table." ";
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
function save($table,$a){
    global $pdo;
    if(!empty($a['id'])){
        $t=[];
        $s="update ".$table." set ";
        foreach ($a as $key => $value) {
            $t[]=sprintf("`%s`='%s'",$key,$value);
        }
        $s.=join(" , ",$t)." where id='".$a['id']."'";
    }else{
        $t1=[];
        $t2=[];
        $s="insert into ".$table." ";
        foreach ($a as $key => $value) {
            $t1[]=sprintf("`%s`",$key,);
            $t2[]=sprintf("'%s'",$value);
        }
        $s.="(".join(" , ",$t1).") values (".join(" , ",$t2).")";
    }
    return $pdo->exec($s);
    // echo $s;
}
function q($a){
    global $pdo;
    return $pdo->query($a)->fetch(PDO::FETCH_ASSOC);
}
function to($s){
    header("location:".$s."");
}
?>