<?php
//sediakann kotak pembungkus yang akan di gunakan (sesuai fitur)
class DataBahanBakar{
    private $HargaSSuper,
            $HargaSVPower,
            $HargaSPowerDiesel,
            $HargaSPowerNitro;
    //attr harga2 yang di buat private karena sudah ada getter yg akan menammpilkan datanya
    public $jenisYangDipilih;
    public $totalLiter;
    //attr diatas di set publiv karena nilainya akan diisi dari luar
    protected $totalpembayaran;
    //set protected karena hanya digunakan oleh class dia dan  turunan untuk proses data


    public function SetHarga($valSSuper , $valSPower , $valSPowerDiesel , $valSPowerNitro){
        //mengisi nilai ke attribute,nilai nantinya di isi dari luar class melalui function
        //nilai dari  luar di ambil kedalam class melalu parameter (variable yang ada dilam)
        //penamaan parameter bebas asal urutann pengisian dr luarnya sesuai
        $this->HargaSSuper = $valSSuper;
        $this->HargaSVPower = $valSPower;
        $this->HargaSPowerDiesel = $valSPowerDiesel;
        $this->HargaSPowerNitro = $valSPowerNitro;
    }

    public function getHarga(){
        //setelah nilai fr attribute di simpan,fungsi getter akan mengambilkan...
        //karena data yang akan dikirim/dikeluarkan lebih dari satu,maka data data tersebut
        $semuaDataSolar['SSuper'] =  $this->HargaSSuper;
        $semuaDataSolar['SVPower'] =  $this->HargaSVPower;
        $semuaDataSolar['SVPowerDiesel'] =  $this->HargaSPowerDiesel;
        $semuaDataSolar['SVPowerNitro'] =  $this->HargaSPowerNitro;
        //tujuan utaman dari getter " return
        return $semuaDataSolar;
    }

}

class Pembelian extends DataBahanBakar{
    //data sudah di sediakan,tinggal proses perhitungan jumlah pembelian
    public function totalHarga(){
        $this->totalpembayaran = $this->getHarga()[$this->jenisYangDipilih] * $this->totalLiter;
    }

    public function cetakBukti(){
        echo"<div class='sama'>";
        echo"<div class='header'>-----------------------------------</div>";
        echo"<div class='details'>";
        echo"Jenis bahan bakar: " . $this->jenisYangDipilih . "<br>";
        echo"Total Liter: " . $this->totalLiter . "<br>";
        echo" Harga bayar: Rp. " .  number_format($this->totalpembayaran, 0,',' , '.');
        echo"</div>";
        echo"<div class='separator'></div>";
        echo"<div class='footer'>-----------------------------------</div>";
        echo"</div>";
    }
    
}
//baru di buka.langsung set harga
$logic = new Pembelian();
$logic->SetHarga(10000,15000,18000,20000);
//kalau uda piks beli,jalanan
if(isset($_POST['beli'])){
    $logic->jenisYangDipilih = $_POST['jenis'];
    $logic->totalLiter = $_POST['liter'];
    //abis kirim nilai form,proses harganya 
    $logic->totalHarga();
    //cetak harga
    $logic->cetakBukti(); 
}
