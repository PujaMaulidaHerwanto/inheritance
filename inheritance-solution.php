<?php


class makanan {

    public $nama,
            $jenis,
            $rasa,
            $harga,
            $cup,
            $slc,
            $tipe;

    public function getLabel(){
        return " $this->jenis, $this->rasa ";
    }
    public function __construct($nama = "Tiramisu" , $jenis = "Kue" , $rasa = "Kopi" , $harga = 25000, $cup = 0, $slc = 0, $tipe){
        $this->nama = $nama; 
        $this->jenis = $jenis;
        $this->rasa = $rasa;
        $this->harga = $harga;
        $this->cup = $cup;
        $this->slc = $slc;
        $this->tipe = $tipe;
    }

    public function getInfoProduk(){

        $str = "{$this->tipe} : {$this->nama} | {$this->getLabel()}, Rp. {$this->harga}";
        
    }


}

class Food extends makanan{
    public function getInfoProduk(){
        $str = "Food : {$this->nama} | {$this->getLabel()}, Rp. {$this->harga} - {$this->slc} Slice.";
        return $str;
    }
}

class Beverage extends makanan {
    public function getInfoProduk(){
        $str = "Food : {$this->nama} | {$this->getLabel()}, Rp. {$this->harga} - {$this->cup} Cup.";
        return $str;
    }
}

class info {
    public function infoproduk( makanan $makanan ){
        $str = "{$makanan->nama} | {$makanan->getLabel()}, Rp. {$makanan->harga}";
        return $str;
    }

}

$produk1 = new Food("Black Choco Almond","Donut","Chocolate",5000, 0, 50, "Food");
$produk2 = new Beverage("Iced Americano","Coffee","Coffee",30000, 100, 0,  "Beverage");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// Food : Donut, Chocolate
// Beverage : Coffee, Kopi
// Food : Cake, Chocolate
// Iced Americano | Coffee, Kopi , Rp. 30000

//Beverage : Iced Americano | Coffee, Coffee, Rp. 30000 - 100 Cup.
//Food : Black Choco Almond | Donut, Chocolate , Rp. 5000 - 50 Slice.

?>
