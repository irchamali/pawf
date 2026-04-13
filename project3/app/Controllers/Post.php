<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Post extends BaseController
{
    public function index()
	{
    // buat object model $post
    $post = new PostModel();

    /*
     siapkan data untuk dikirim ke view dengan nama $posts
     dan isi datanya dengan post yang sudah terbit
    */
    $data['posts'] = $post->where('status', 'published')->findAll();

    // kirim data ke view
    echo view('post', $data);
	}

	//------------------------------------------------------------

	public function viewPost($slug)
	{
		$post = new PostModel();
		$data['post'] = $post->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['post']) {
			throw PageNotFoundException::forPageNotFound();
		}

		echo view('post_detail', $data);
	}
}