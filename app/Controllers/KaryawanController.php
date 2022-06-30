<?php

namespace App\Controllers;

use App\Models\Karyawan;

class KaryawanController extends BaseController
{
  //assign nama model 
  protected $modelName = 'App\Models\Karyawan';
  private $db;
  function __construct()
  {
    $this->karyawan = new Karyawan();
    $this->db = \Config\Database::connect();
  }

  //untuk melihat utuh, atau halaman utama dari karyawan
  public function index()
  {
    $data = $this->karyawan->orderBy('nama', 'asc')->findAll();
    return view('karyawan', [
      'data' => $data,
      'judul' => 'UTS || KARYAWAN'
    ]);
  }

  //menampilkan modal untuk create
  public function create()
  {
    $data = $this->db->table('divisi')->get()->getResult();
    return view('createKaryawan', [
      'judul' => 'Tambah Karyawan',
      'divisi' => $data
    ]);
  }

  //menerima data inputan untuk nantinya di cetak di database
  public function store()
  {
    $checkKaryawan = $this->karyawan->find($this->request->getPost('nik'));
    if ($checkKaryawan) {
      return redirect('/')->with('gagal_id', 'Data sudah pernah ada');
    }
    $data = [
      'nik' => $this->request->getPost('nik'),
      'nama' => $this->request->getPost('nama'),
      'jenkel' => $this->request->getPost('jenkel'),
      'tempat_lahir' => $this->request->getPost('tempat_lahir'),
      'tgl_lahir' => $this->request->getPost('tgl_lahir'),
      'alamat' => $this->request->getPost('alamat'),
      'divisi' => $this->request->getPost('divisi')
    ];
    $this->karyawan->insert($data);
    return redirect('/')->with('tersimpan', 'Data Berhasil disimpan');
  }

  //menampilkan data single dan memunculkan modal untuk nantinya di edit
  public function edit($id)
  {
    $data = $this->karyawan->find($id);
    $divisi = $this->db->table('divisi')->get()->getResult();
    if (empty($data)) {
      return redirect('/')->with('gagal_id', 'Data Tidak ditemukan');
    }
    return view('editKaryawan', [
      'data' => $data,
      'divisi' => $divisi,
      'judul' => 'Edit Karyawan'
    ]);
  }

  //menerima data dan mengupdate data yang ada di database 
  public function update($id)
  {
    $data = [
      'nik' => $this->request->getPost('nik'),
      'nama' => $this->request->getPost('nama'),
      'jenkel' => $this->request->getPost('jenkel'),
      'tempat_lahir' => $this->request->getPost('tempat_lahir'),
      'tgl_lahir' => $this->request->getPost('tgl_lahir'),
      'alamat' => $this->request->getPost('alamat'),
      'divisi' => $this->request->getPost('divisi')
    ];
    $this->karyawan->update($id, $data);
    return redirect('/')->with('teredit', 'Data Berhasil diUpdate');
  }

  //menghapus data berdasarakan id 
  public function destroy($id)
  {
    $data = $this->karyawan->find($id);
    if (empty($data)) {
      return redirect('/')->with('gagal_id', 'Data Tidak ditemukan');
    }
    $this->karyawan->delete($id);
    return redirect('/')->with('terhapus', 'Data Berhasil diHapus');
  }
}
