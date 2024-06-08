<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;

class NewsAdmin extends BaseController
{
    public function index()
    {
        $news = new NewsModel();
        $data['newses'] = $news->findAll();
        echo view('pageadmin/list_berita', $data);
    }

    public function preview($id)
    {
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();
        if (!$data['news']) {
            throw PageNotFoundException::forPageNotFound();
        }
        return view('pageadmin/detail_berita', $data);
    }

    public function create()
    { // lakukan validasi 
        $validation = \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database 
        if ($isDataValid) {
            $news = new NewsModel();
            $news->insert([
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            return redirect('admin/news');
        }

        // tampilkan form create 
        echo view('pageadmin/create', ['validation' => $validation]);
    }

    private function getCreateValidationRules()
    {
        return [
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required|min_length[10]',
            'status' => 'required|in_list[draft,published]',
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
        ];
    }

    public function edit($id)
    {
        $news = new NewsModel();
        $data['news'] = $news->where('id', $id)->first();
    
        $validation = \Config\Services::validation();
        $validation->setRules($this->getEditValidationRules()); // Mengambil aturan validasi untuk edit
    
        if ($this->request->getMethod() === 'post' && $validation->withRequest($this->request)->run()) {
            // Jika data valid, simpan ke database
            $news->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect()->to(base_url('admin/news'));
        }
    
        // Tampilkan form edit dengan validasi
        return view('pageadmin/edit', $data);
    }
    

    private function getEditValidationRules()
    {
        return [
            'id' => 'required',
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required|min_length[10]',
            'status' => 'required|in_list[draft,published]',
            'image' => 'max_size[image,1024]|is_image[image]',
        ];
    }

    public function update($id)
    {
        $news = new NewsModel();
        $data['news'] = $news->find($id);
    
        // Validasi data yang diubah
        $validation = \Config\Services::validation();
        $validation->setRules($this->getEditValidationRules());
        if (!$validation->run($this->request->getPost())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    
        // Perbarui berita
        $news->update($id, [
            "title" => $this->request->getPost('title'),
            "content" => $this->request->getPost('content'),
            "status" => $this->request->getPost('status')
        ]);
    
        return redirect()->to(base_url('admin/news'))->with('success', 'Berita berhasil diperbarui');
    }
    


    public function delete($id)
    {
        $news = new NewsModel();
        $news->delete($id);

        return redirect()->to(base_url('/list_berita'));
    }
}
