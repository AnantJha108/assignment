<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['users'] = User::all()->count();
        return view("admin.dashboard",$data);
    }
}
