<?php echo $data ?>
<table class="table table-sm table-striped table-hover table-primary table-bordered" id="myTable">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">jenis Kelamin</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $key => $item) : ?>
      <tr>
        <th scope="row"><?= ++$key ?></th>
        <td><?= $item['nik'] ?></td>
        <td><?= $item['nama'] ?></td>
        <td><?= $item['jenkel'] ?></td>
        <td><?= $item['tempat_lahir'] ?></td>
        <td><?= $item['tgl_lahir'] ?></td>
        <td><?= $item['alamat'] ?></td>
        <td>
          <button class="btn btn-success">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>