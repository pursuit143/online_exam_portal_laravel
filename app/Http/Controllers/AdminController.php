<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function forgetForm()
    {
        return view('admin.auth.forget');
    }

    public function passwordResetForm()
    {
        return view('admin.auth.reset');
    }
    public function showCreateExam()
    {
        return view('admin.createExam');
    }
}
