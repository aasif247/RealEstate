<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactBackendController extends Controller
{
    public function index()
    {   
        $data = [
            'title' => 'Contact',
            'page_title' => 'Contact',
            'breadcrumb' => [[ 'link'=>'/','name' => 'Contact']]
        ];
        return view('backend.pages.contact.index',$data);
    }
}
