<?php

namespace App\Http\Controllers\Admin;
use Auth; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
{
    return view( view, 'admin.dashboard');
}

}