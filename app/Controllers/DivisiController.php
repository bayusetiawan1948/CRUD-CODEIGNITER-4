<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Divisi;

class DivisiController extends BaseController
{
    //assign nama model 
    protected $modelName = 'App\Models\Divisi';
    function __construct()
    {
        $this->divisi = new Divisi();
    }

    //untuk melihat utuh, atau halaman utama dari karyawan
    public function index()
    {
        $data = $this->divisi->orderBy('nama_divisi', 'asc')->findAll();
        return view('/divisi/divisi', [
            'data' => $data,
            'judul' => 'DIVISI'
        ]);
    }

    //menampilkan modal untuk create
    public function create()
    {
        return view('/divisi/createDivisi', [
            'judul' => 'Tambah divisi'
        ]);
    }

    //menerima data inputan untuk nantinya di cetak di database
    public function store()
    {
        $data = [
            'divisi_id' => $this->request->getPost('divisiid'),
            'nama_divisi' => $this->request->getPost('namadivisi'),
        ];
        $this->divisi->insert($data);
        return redirect()->route('index_divisi')->with('tersimpan', 'Data Berhasil disimpan');
    }

    //menampilkan data single dan memunculkan modal untuk nantinya di edit
    public function edit($id)
    {
        $data = $this->divisi->find($id);
        if (empty($data)) {
            return redirect('')->route('index_divisi')->with('gagal_id', 'Data Tidak ditemukan');
        }
        return view('/divisi/editDivisi', [
            'data' => $data,
            'judul' => 'Edit divisi'
        ]);
    }

    //menerima data dan mengupdate data yang ada di database 
    public function update($id)
    {
        $data = [
            'divisi_id' => $this->request->getPost('divisiid'),
            'nama_divisi' => $this->request->getPost('namadivisi'),
        ];
        $this->divisi->update($id, $data);
        return redirect('')->route('index_divisi')->with('teredit', 'Data Berhasil diUpdate');
    }

    //menghapus data berdasarakan id 
    public function destroy($id)
    {
        $data = $this->divisi->find($id);
        if (empty($data)) {
            return redirect('')->route('index_divisi')->with('gagal_id', 'Data Tidak ditemukan');
        }
        $this->divisi->delete($id);
        return redirect('')->route('index_divisi')->with('terhapus', 'Data Berhasil diHapus');
    }
}
