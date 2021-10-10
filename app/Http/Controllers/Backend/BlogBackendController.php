<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogBackendController extends Controller
{
    public function index()
    {   
        $data = [
            'title' => 'Blog',
            'page_title' => 'Blog',
            'breadcrumb' => [[ 'link'=>'/','name' => 'Blog']]
        ];
        return view('backend.pages.blog.index',$data);
    }
}
