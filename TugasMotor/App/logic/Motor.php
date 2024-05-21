<?php

class Pelanggan {
    protected $pelanggan;
    protected $motor;
    protected $hargaPerHari;
    protected $diskon = 5; // 5%
    protected $ppn = 10; // 10%
    protected $hari;

    public function __construct($pelanggan, $hari, $motor, $hargaPerHari) {
        $this->pelanggan = $pelanggan;
        $this->hari = $hari;
        $this->motor = $motor;
        $this->hargaPerHari = $hargaPerHari;
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
        return $this->pelanggan; // Assuming pelanggan is a boolean
    }
}

class Motor extends Pelanggan {
    public function ppn() {
        $harga = $this->hargaPerHari * $this->hari;
        $hargaDenganPPN = $harga + ($harga * $this->ppn / 100);
        return $hargaDenganPPN;
    }

    public function bon() {
        $hargaDenganPPN = $this->ppn();
        $hargaFinal = $hargaDenganPPN;

        if ($this->langganan()) {
            $hargaFinal = $hargaDenganPPN - ($hargaDenganPPN * $this->diskon / 100);
            echo "
            <div class='nama'>
            <h3>Anda berlangganan di sini dan Anda mendapatkan diskon sebesar {$this->getDiskon()}%</h3>
            <p>Jenis motor yang Anda sewa adalah {$this->motor} selama {$this->hari} hari</p>
            <p>Harga per motor adalah " . number_format($this->hargaPerHari, 2, ',', '.') . "</p>
            <h3>Anda harus membayar sebesar Rp." . number_format($hargaFinal, 2, ',', '.') . "</h3>
            </div>";
        } else {
            echo "
            <div class='nama'>
            <h3>Anda tidak berlangganan di sini dan Anda mendapatkan diskon sebesar 0%</h3>
            <p>Jenis motor yang Anda sewa adalah {$this->motor} selama {$this->hari} hari</p>
            <p>Harga per motor adalah Rp." . number_format($this->hargaPerHari, 2, ',', '.') . "</p>
            <h3>Anda harus membayar sebesar Rp." . number_format($hargaDenganPPN, 2, ',', '.') . "</h3>
            </div>";
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
        $waktu = (int)$_POST['waktu']; // Pastikan waktu adalah integer
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
            $hargaPerHari = $hargaMotor[$motor];
            $buy = new Motor($isPelanggan, $waktu, $motor, $hargaPerHari);
            $buy->bon();
        }
    }
}
?>
