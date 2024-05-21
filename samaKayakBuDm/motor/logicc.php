<?php
class Data {
    public $member;
    public $jenis;
    public $waktu;
    public $diskon;
    protected $pajak;
    private $Scoopy, $Beat, $Vario, $Aerox;
    private $listmember = ['kafka','arko','ardissya'];

    function __construct(){
        $this->pajak = 10000;
    }

    public function getMember(){
        if(in_array($this->member, $this->listmember)){
            return "member";
        }else{
            return "non-member";
        }
    }
    public function setHarga($jenis1, $jenis2, $jenis3, $jenis4){
        $this->Scoopy = $jenis1;
        $this->Beat = $jenis2;
        $this->Vario = $jenis3;
        $this->Aerox = $jenis4;
    }
    public function getHarga() {
        $data["Scoopy"] = $this-> Scoopy;
        $data["Beat"] = $this-> Beat;
        $data["Vario"] = $this-> Vario;
        $data["Aerox"] = $this-> Aerox;
        return $data;
    }
}

class Rent extends Data {
    public function hargaRental () {
        $dataHarga = $this->getHarga()[$this->jenis];
        $diskon = $this->getMember() == "member" ? 5 : 0;
        if ($this->waktu === 1) {
            $bayar = ($dataHarga - ($dataHarga * $diskon / 100)) + $this->pajak;
        }else{
            $bayar = (($dataHarga * $this->waktu) - ($dataHarga * $diskon/100)) + $this->pajak;
        }
        return [$bayar, $diskon];
    }

    public function pembayaran(){
        echo "<center>";
        echo $this->member . " berstatus sebgai " . $this->getMember() . " mendapatkan diskon sebesar " . $this->hargaRental()[1] . "%";
        echo "<br>";
        echo "Jenis motor yang dirental adalah " . $this->jenis . " selama " . $this->waktu . " hari";
        echo "<br>";
        echo "Harga rental per-harinya : Rp. " . number_format($this->getHarga()[$this->jenis]);
        echo "<br>";
        echo "<b>Besar yang harus dibayarkan adalah: Rp. ". number_format($this->hargaRental()[0]). " (<i>Termasuk Pajak)</i></b>";
        echo "</center>";
    }
}

//baru di buka.langsung set harga
$logic = new Rent();
$logic->SetHarga(100000,150000,180000,200000);
//kalau uda piks beli,jalanan
if(isset($_POST['beli'])){
    $logic->jenis = $_POST['jenis'];
    $logic->waktu = $_POST['waktu'];
    $logic->member = $_POST['nama'];
    //abis kirim nilai form,proses harganya 
    $logic->hargaRental();
    //cetak harga
    $logic->pembayaran(); 
}
