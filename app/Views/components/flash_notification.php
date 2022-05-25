<?php
if (session()->getFlashData('tersimpan')) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('tersimpan') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php
} else if (session()->getFlashData('teredit')) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('teredit') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php
} else if (session()->getFlashData('terhapus')) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('terhapus') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php
} else if (session()->getFlashData('gagal_id')) {
?>
  <div class="alert alert-Danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('gagal_id') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php
}
?>