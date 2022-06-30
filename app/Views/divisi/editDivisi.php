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
        <a href="<?= base_url('/divisi') ?>">
          <button class="my-2 btn btn-primary">Back</button>
        </a>
        <h2 class="m-auto"><?= $judul ?></h2>
        <form action="<?= base_url('/divisi/update/' . $data['divisi_id']) ?>" method="post">
          <?= csrf_field(); ?>
          <div class="card mt-3" style="width: 32rem;">
            <div class="card-body">
              <div class="mb-3">
                <label for="nik" class="form-label">Kode Divis</label>
                <input type="text" class="form-control" id="divisiid" placeholder="Masukan kode divisi" name="divisiid" value="<?= $data['divisi_id'] ?>">
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Divisi</label>
                <input type="text" class="form-control" id="divisiid" placeholder="Masukan nama divisi" name="namadivisi" value="<?= $data['nama_divisi'] ?>">
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" id="update">Update</button>
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
      const btnSave = document.getElementById('update');
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