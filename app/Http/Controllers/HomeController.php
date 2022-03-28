<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Banar;
use App\Models\Category;
use App\Models\SiteSetting;
use App\Models\Team;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banar = Banar::latest()->first();
        $about = Aboutus::latest()->first();
        $work = Work::all();
        $category = Category::with('work')->get();
        $team = Team::all();
        $siteSetting = SiteSetting::latest()->first();
        return view('home', ["banarinfo" => $banar, "about" => $about, "work" => $work, "teams" => $team, "siteSetting" => $siteSetting,"categorys"=>$category]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.adminHome');
    }
}
