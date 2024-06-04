<?php

namespace App\Http\Controllers;

use App\Traits\SessionTrait;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use SessionTrait;
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}
