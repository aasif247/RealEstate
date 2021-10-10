<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertiesBackendController extends Controller
{
    public function index()
    {   
        $data = [
            'title' => 'Properties',
            'page_title' => 'Properties',
            'breadcrumb' => [[ 'link'=>'/','name' => 'Properties']]
        ];
        return view('backend.pages.properties.index',$data);
    }
}
