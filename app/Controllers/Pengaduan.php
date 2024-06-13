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

    public function indexuser()
    {
        $model = new PengaduanModel();
        $data['pengaduan'] = $model->findAll();
        return view('pengaduanuser/indexuser', $data);
    }

    public function createPengaduan()
    {
        return view('pengaduanuser/create');
    }

    public function storePengaduan()
    {
        $model = new PengaduanModel();

        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $fileName);
        } else {
            $fileName = null;
        }

        $data = [
            'perihal' => $this->request->getPost('perihal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'pengadu' => $this->request->getPost('pengadu'),
            'gambar' => $fileName,
            'tanggal_pengaduan' => $this->request->getPost('tanggal_pengaduan'),
            'status' => 'menunggu'
        ];

        $model->save($data);

        return redirect()->to('/pengaduan/create-pengaduan')->with('message', 'Pengaduan berhasil disimpan');
    }


    public function managePengaduan()
    {
        $model = new PengaduanModel();
        $data['pengaduan'] = $model->findAll();
        return view('admin/manage_pengaduan', $data);
    }

    public function editPengaduan($id)
    {
        $model = new PengaduanModel();
        $data['pengaduan'] = $model->find($id);
        return view('pengaduan/edit', $data);
    }

    public function updatePengaduan($id)
    {
        $model = new PengaduanModel();
        $data = [
            'perihal' => $this->request->getPost('perihal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'pengadu' => $this->request->getPost('pengadu'),
            'tanggal_pengaduan' => $this->request->getPost('tanggal_pengaduan'),
            'status' => $this->request->getPost('status')
        ];

        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $fileName);
            $data['gambar'] = $fileName;
        }

        $model->update($id, $data);

        return redirect()->to('/admin/manage-pengaduan')->with('message', 'Pengaduan berhasil diperbarui');
    }

    public function deletePengaduan($id)
    {
        $model = new PengaduanModel();
        $model->delete($id);
        return redirect()->to('/admin/manage-pengaduan');
    }
}
