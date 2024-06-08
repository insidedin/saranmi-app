<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang'
        ];
        return view('pages/tentang', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Kontak'
        ];
        return view('pages/kontak', $data);
    }

    public function berita()
    {
        $news = new NewsModel();
        $data = [
            'title' => 'Berita',
            'newses' => $news->where('status', 'published')->findAll()
        ];
        return view('pages/berita', $data);
    }


    public function liatberita($slug)
    {
        $news = new NewsModel();

        $data = [
            'title' => 'Berita',
            'news' =>  $news->where([
                'slug' => $slug, 'status' => 'published'
            ])->first()
        ];

        // tampilkan 404 error jika data tidak ditemukan

        if (!$data['news']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('pages/detailBerita', $data);
    }
}
