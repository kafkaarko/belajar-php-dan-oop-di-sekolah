<div class="container">
    <h3 class="mb-3 text-capitalize">Daftar buku <?=$data['nama']?></h3>
    <table class="table teble-success table-striped table-bordered">
        <thead>
            <th scope="col">
                #
            </th>
            <th scope="col">
                judul
            </th>
            <th scope="col">
                penulis
            </th>
            <th scope="col">
                tanggal_selesai
            </th>
            
        </thead>
        <tbody>
            <?php $no = 1?>
            <?php foreach($data['buku'] as $buku) :?>
            <tr>
                <th scope="row" ><?php $no++?></th>
                <td><?= $buku['judul'] ?></td>
                <td><?= $buku['penulis'] ?></td>
                <td><?= $buku['tanggal_selesai'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>