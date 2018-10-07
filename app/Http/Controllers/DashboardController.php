<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Berita;
use App\Models\Program;
use Tracker;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $program=Program::all();
        $berita=Berita::where('flag',1)->count();

        $pageViews = Tracker::pageViews(60 * 24 * 120);

        $pageViewsPerCountry = Tracker::pageViewsByCountry(60 * 24 * 120);

        $allData = [$pageViews,$pageViewsPerCountry];

        return view('backend.pages.dashboard.index',compact('crumbs','allData','selected_period'))
        ->with('program', $program)
        ->with('berita', $berita);
    }
}
