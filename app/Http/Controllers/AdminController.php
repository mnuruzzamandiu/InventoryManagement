<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('backend.pages.admin_dashboard');
    }

    public function AdminProfile()
    {
        return view('backend.pages.profile');
    }
    public function AccountSettings()
    {
        return view('backend.pages.profile');
    }
}
