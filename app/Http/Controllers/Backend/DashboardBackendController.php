<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardBackendController extends Controller
{
    public function index()
    {   
        $data = [
            'title' => 'Dashboard',
            'page_title' => 'Dashboard',
            'breadcrumb' => [[ 'link'=>'/','name' => 'Dashboard']]
        ];
        return view('backend.pages.dashboard.index',$data);
    }
}