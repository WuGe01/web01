<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB{
    private $dns="mysql::host=localhost;charset=utf8;dbname=test";
    private $table;
    private $pdo;
    private $root="root";
    private $password="";
    public function __construct($e){
        $this->table=$e;
        $this->pdo=new PDO($this->dns,$this->root,$this->password);
    }
    public function all(...$a){
        $sql="select * from $this->table ";
        if(!empty($a[0]) && is_array($a[0])){
            $t=[];
            foreach ($a[0] as $key => $value) {
                $t[]=sprintf("`%s` = '%s'",$key,$value);
            }
            $sql=$sql." where ".join(" && ",$t);
        }
        if(!empty($a[1])){
            $sql=$sql.$a[1];
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function num(...$a){
        $s="select count(*) from $this->table ";
        if(!empty($a[0]) && is_array($a[0])){
            $t=[];
            foreach ($a[0] as $key => $value) {
                $t[]=sprintf(" `%s`='%s' ,$key,$value");
            }
            $s=$s." where ".join(" && ",$t);
        }
        if(!empty($a[1])){
            $s=$s.$a[1];
        }
        return $this->pdo->query($s)->fetchColumn();
    }
    public function find($a){
        $s="select * from $this->table ";
        if(is_array($a)){
            $t=[];
            foreach ($a as $key => $value) {
                $t[]=sprintf(" `%s`='%s' ,$key,$value");
            }
            $s=$s." where ".join(" && ",$t);
        }else{
            $s=$s." where `id`='".$a"'";
        }
        return $this->pdo->query($s)->fetch(PDO::ASSOC);
    }
    public del($a){
        $s="delect from $this->table ";
        if(is_array($a)){
            $t=[];
            foreach ($a as $key => $value) {
                $t[]=sprintf(" `%s`='%s' ,$key,$value");
            }
            $s=$s." where ".join(" && ",$t);
        }else{
            $s=$s." where `id`='".$a"'";
        }
        return $this->pdo->exec($s);
    }
    public q($a){
        return $this->pdo->query($a)->fetchAll(PDO::ASSOC);
    }
    public save($a){
        if(!empty($a['id'])){
            $t=[];
            foreach ($a as $key => $value) {
                if($key!=$a['id']){
                    $t[]=sprintf(" `%s`='%s' ",$key,$value);
                }
                $s="update $this->table set ".join(" , ",$t)." where `id`='".$a['id']."'";
            }
        }else{
            $s="insert into $this->table (`".join("`,`",array_keys($a))."`) values ('".join("','",$a)."')";
        }
        return $this->pdo->exec($s);
    }
}
function to($a){
    header("location:".$a);
}

?>