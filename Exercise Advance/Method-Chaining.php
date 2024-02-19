<?php 

class database{
    private $query;

    public function select($column){
        $this->query = "pilih $column ";
        return $this;
    }

     public function from($table){
        $this->query .= "dari $table ";
        return $this;
     }

     public function where($condition){
        $this->query .="dimana $condition ";
        return $this;
     }

    public function getQuery(){
        return $this->query;
    }
}

$mahasiswa = new database();
$mahasiswa->select("nim, nama")->from("mahasiswa")->where("nim='12345678'");

echo $mahasiswa->getQuery();  
?>