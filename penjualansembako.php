<?php
//buat class beras
class beras {
    public $pemilik = "babeh";
    public $merk = "PadiKu";

    public function _construct(){
        echo "ini berasal dari Constuructor beras";
    }
    public function giling_beras(){
        return "giling beras $this->merk punya $this->pemilik";
    }
    public function _destruc(){
        echo"ini berasal dari Destructor laptop";
    }
}
//buat objek dari class beras (instansiasi)
$beras_babeh= new beras();

echo"<br />";
echo $beras_babeh->giling_beras ();
echo"<br/>";
?>