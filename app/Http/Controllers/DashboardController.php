<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\News;
use App\Models\Galery;
use App\Models\Ukm;

class DashboardController extends Controller
{
    public function index()
	{
		return view('admin.dashboard.index', [
            'section' => Section::count(),
            'news' => News::count(),
            'galery' => Galery::count(),
            'ukm' => Ukm::count(),
        ]);
	}
}
