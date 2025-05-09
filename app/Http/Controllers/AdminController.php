<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $skillCount = Skill::count();
        return view('admin.dashboard', compact('skillCount'));
    }
}
