<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function student()
    {
        return view('dashboard.student');
    }

    public function teacher()
    {
        return view('dashboard.teacher');
    }

    public function employee()
    {
        return view('dashboard.employee');
    }

    public function default()
    {
        return view('dashboard.default');
    }
}
