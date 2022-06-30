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
  <?= $this->include('/components/navbar.php') ?>
  <div class="container">
    <div class="row">
      <div class="col-9 m-5">
        <h2 class="m-auto">Table Divisi</h2>
        <?= $this->include('/components/flash_notification') ?>
        <a href="<?= base_url('/divisi/create') ?>">
          <button class="my-2 btn btn-primary">Tambah Data</button>
        </a>
        <div id="read" class="table-responsive">
          <table class="table table-sm table-striped table-hover table-primary table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Divisi id</th>
                <th scope="col">Nama Divisi</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $key => $item) : ?>
                <tr>
                  <td><?= ++$key ?></td>
                  <td><?= $item['divisi_id'] ?></td>
                  <td><?= $item['nama_divisi'] ?></td>
                  <td class="p-3 d-flex flex-row justify-content-ceneter">
                    <a href="<?= base_url('/divisi/edit/' . $item['divisi_id']) ?>">
                      <button class="btn btn-success">Edit</button>
                    </a>
                    <a href="<?= base_url('/divisi/delete/' . $item['divisi_id']) ?>">
                      <button class="btn btn-danger ms-2">Delete</button>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>