<?php 

class hesapla{
    public $kenar1;
    public $kenar2;
    public $kenar3;


}
class Dikdortgen extends hesapla{
    public function aland($kenar1,$kenar2){
        return $kenar1*$kenar2;
    }
    public function cevred($kenar1,$kenar2){
        return ($kenar1+$kenar2)*2;
    }

}
class Kare extends hesapla{
     public function alank($kenar1){
        return $kenar1*$kenar1;
    }
    public function cevrek($kenar1){
        return $kenar1*4;
    }
}
class Ucgen extends hesapla{
     public function alanu($kenar1,$kenar2,$kenar3){
        $s=($kenar1+$kenar2+$kenar3)/2;
        $alan=sqrt( $s*($s-$kenar1)*($s-$kenar2)*($s-$kenar3));
        return $alan;
    }
    public function cevreu($kenar1,$kenar2,$kenar3){
        return $kenar1+$kenar2+$kenar3;
    }
}

$ucgen=new Ucgen();
echo "Ucgenin Alanı: ". $ucgen->alanu(3,4,5)."<br>";
echo "Ucgenin Cevresi: ". $ucgen->cevreu(3,5,4)."<br>";
echo "<br>";
$kare = new Kare();
echo "Karenin Alanı: ". $kare->alank(3)."<br>";
echo "Karenin Cevresi: ". $kare->cevrek(3)."<br>";
echo "<br>";
$dikdorgen =new Dikdortgen();
echo "Dikdortgenin Alanı: ". $dikdorgen->aland(3,4)."<br>";
echo "Dikdortgenin Cevresi: ". $dikdorgen->cevred(3,4)."<br>";
echo "<br>";

?>