<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title><?= $judul ?></title>
</head>

<body>
  <?= $this->include('/components/navbar') ?>
  <div class="container">
    <div class="row">
      <div class="col-9 m-5">
        <h2 class="m-auto"><?= $judul ?></h2>
        <form action="<?= base_url('/store') ?>" method="post">
          <?= csrf_field(); ?>
          <div class="card mt-3" style="width: 32rem;">
            <div class="card-body">
              <div class="mb-3">
                <label for="nik" class="form-label">NIK Karyawan</label>
                <input type="text" class="form-control" id="nik" placeholder="Masukan NIK karyawan" name="nik">
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan nama karyawan" name="nama">
              </div>
              <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" id="jenkel" name="jenkel">
                  <option selected>Pilih jenis kelamin</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tmpt-lahir" class="form-label">Tempat Lahir Karyawan</label>
                <input type="text" class="form-control" id="tmpt-lahir" placeholder="Masukan tempat lahir karyawan" name="tempat_lahir">
              </div>
              <div class="mb-3">
                <label for="tgl-lahir" class="form-label">Tanggal Lahir Karyawan</label>
                <input type="date" class="form-control" id="tgl-lahir" placeholder="Masukan tanggal lahir karyawan" name="tgl_lahir">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Karyawan</label>
                <textarea class="form-control" id="alamat" rows="3" placeholder="Alamt Karyawan" name="alamat"></textarea>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" id="simpan">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <script>
      const btnSave = document.getElementById('simpan');
      btnSave.addEventListener('click', (e) => {
        e.preventDefault();
        const nik = document.getElementById('nik');
        const nama = document.getElementById('nama');
        const jenkel = document.getElementById('jenkel');
        const tmpt_lahir = document.getElementById('tmpt-lahir');
        const tgl_lahir = document.getElementById('tgl-lahir');
        const alamat = document.getElementById('alamat');
        let jawaban = '';

        console.log({
          nik: nik.value,
          nama: nama.value,
          jenkel: jenkel.value,
          tmpt_lahir: tmpt_lahir.value,
          tgl_lahir: tgl_lahir.value,
          alamat: alamat.value
        })
      });
    </script> -->
</body>

</html>