<?php
namespace App\Controllers;

use App\Models\PengaduanModel;
use CodeIgniter\Controller;

class Pengaduan extends Controller
{
    public function index()
    {
        $model = new PengaduanModel();
        $data['pengaduan'] = $model->findAll();
        return view('pengaduan/index', $data);
    }

    public function create()
    {
        return view('pengaduan/create');
    }

    public function store()
    {
        $model = new PengaduanModel();

        $data = [
            'perihal' => $this->request->getPost('perihal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'pengadu' => $this->request->getPost('pengadu'),
            'gambar' => $this->request->getPost('gambar'),
            'tanggal_pengaduan' => $this->request->getPost('tanggal_pengaduan'),
            'status' => $this->request->getPost('status'),
        ];

        $model->save($data);
        return redirect()->to('/pengaduan');
    }

    public function edit($id)
    {
        $model = new PengaduanModel();
        $data['pengaduan'] = $model->find($id);
        return view('pengaduan/edit', $data);
    }

    public function update($id)
    {
        $model = new PengaduanModel();

        $data = [
            'perihal' => $this->request->getPost('perihal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'pengadu' => $this->request->getPost('pengadu'),
            'gambar' => $this->request->getPost('gambar'),
            'tanggal_pengaduan' => $this->request->getPost('tanggal_pengaduan'),
            'status' => $this->request->getPost('status'),
        ];

        $model->update($id, $data);
        return redirect()->to('/pengaduan');
    }

    public function delete($id)
    {
        $model = new PengaduanModel();
        $model->delete($id);
        return redirect()->to('/pengaduan');
    }
}
