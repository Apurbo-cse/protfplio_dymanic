<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $home = DB::table('homes')->where('status', '1')->get();
        $skill = DB::table('skills')->where('status', '1')->get();
        return view('frontend.master',compact('home', 'skill'));
    }
}
