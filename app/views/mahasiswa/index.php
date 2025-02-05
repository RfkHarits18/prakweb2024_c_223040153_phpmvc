<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombol" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa
            </button>
            <br><br>
    </div>
</div>

    <div class="row ">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/Mahasiswa/cari" method="post">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Mahasiswa.." aria-label="Recipient's username" name="keyword" autocomplete >
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
</div>
            </form>
</div>
</div>

            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item">
                <?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-right ml-2">detail</a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success float-right ml-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal">Ubah</a>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-right ml-2" onclick="return confirm('yakin?');">hapus</a>
            </li>
            <?php endforeach; ?>
            </ul>            
            
                    
            
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
               <div class="form-group">
                    <label for"nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div> 
            
                <div class="form-group">
                    <label for"nrp">NRP</label>
                    <input type="number" class="form-control" id="nrp" name="nrp">
                </div> 

                <div class="form-group">
                    <label for"email">Email</label>
                    <input type="number" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Pangan">Teknik Pangan</option>
                        <option value="Teknik Planologi">Teknik Planologi</option>
                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>
                </div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
      </div>
    </div>
  </div>
</div>

