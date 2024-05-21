<?php


class Pelanggan {
    protected $pelanggan;
    protected $motor;
    protected $harga;
    protected $diskon = 5;
    protected $ppn = 10000;
    protected $hari;

    public function __construct($pelanggan, $hari, $motor, $harga) {
        $this->pelanggan = $pelanggan;
        $this->hari = $hari;
        $this->motor = $motor;
        $this->harga = $harga;
    }

    public function getPelanggan() {
        return $this->pelanggan;
    }

    public function getMotor() {
        return $this->motor;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function getHari() {
        return $this->hari;
    }

    public function langganan() {
        return $this->pelanggan === true; // Assuming pelanggan is a boolean
    }
}

class Motor extends Pelanggan {
    public function ppn() {
        $harga = $this->harga * $this->hari;
        $hargaSemua = $harga + $harga * $this->ppn / 100;
        return $hargaSemua;
    }

    public function bon() {
        $hargaSemua = $this->ppn();
        $diskon = $hargaSemua - ($hargaSemua * $this -> diskon / 100);
        if ($this->langganan()) {
            echo "
            <div class='nama'>
            <h3>anda berlangganan disini dan anda mendapat kan diskon sebesar {$this->getDiskon()}%</h3>
            <p>Jenis motor yang ada sewa adalah {$this->motor} selama {$this->hari} hari</p>";
            echo"<p>harga permotornya adalah " . number_format($this -> harga, 2, ',', '.') . "</p>";
            echo"<h3>Anda harus membayar sebesar Rp." .  number_format($diskon, 2, ',', '.') . "</h3>
            </div>";
        } else {
            echo "
            <div class='nama'>
            <p>Jenis motor yang ada sewa adalah {$this->motor} selama {$this->hari} hari</p>
            <p>harga permotornya adalah Rp." .   number_format($this -> harga, 2, ',', '.') .  "</p>
            <h3>Anda harus membayar sebesar Rp.". number_format($hargaSemua, 2, ',', '.') .  "</h3>
            </div>
            ";
        }
    }
}

$daftarPelanggan = ["budi", 'kafka', 'anu']; // Array pelanggan

// Fungsi untuk memeriksa apakah user ada dalam array pelanggan
function isPelanggan($user, $daftarPelanggan) {
    return in_array($user, $daftarPelanggan);
}

if (isset($_POST['submit'])) {
    if (isset($_POST['pelanggan'], $_POST['waktu'], $_POST['motor'])) {
        $pelangganInput = $_POST['pelanggan'];
        $waktu = $_POST['waktu'];
        $motor = $_POST['motor'];
        $hargaMotor = [
            "vario" => 50000,
            "beat" => 40000,
            "supra" => 100000,
        ];

        // Cek apakah pelanggan ada dalam array
        $isPelanggan = isPelanggan($pelangganInput, $daftarPelanggan);

        // Buat objek pelanggan
        if (array_key_exists($motor, $hargaMotor)) {
            $harga = $hargaMotor[$motor] + $waktu;
            $buy = new Motor($isPelanggan, $waktu, $motor, $harga);
            $buy->bon();
        }
    }
}
?>
