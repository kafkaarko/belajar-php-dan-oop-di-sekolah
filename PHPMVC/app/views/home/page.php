<div class="container">
    <div class="d-flex justify-content-center" >
        <div class="card" style="width: 18rem">
            <img src="<?= BASE_URL?>/img/<?= $data['gambar']?>" class="card-img-top" alt="..." >
            <div class="card-body">
                <h5 class="card-title">profile anda</h5>
                <p class="card-text">
                    Nama : <?= $data['nama']?>
                    <br>
                    pekerjaan : <?= $data['pekerjaan']?>
                </p>
                <a href="<?= BASE_URL?>/home/index" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>