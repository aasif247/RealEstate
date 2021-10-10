<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutBackendController extends Controller
{
    public function index()
    {   
        $data = [
            'title' => 'About Us',
            'page_title' => 'About Us',
            'breadcrumb' => [[ 'link'=>'/','name' => 'About Us']]
        ];
        return view('backend.pages.about.index',$data);
    }
}
