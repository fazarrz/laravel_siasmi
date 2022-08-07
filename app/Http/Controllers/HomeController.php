<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Ukm;
use App\Models\News;
use App\Models\Galery;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        return view('user.home.index', [
            'section' => Section::all(),
            'ukm' => DB::table('ukms')->paginate(3),
            'news' => News::all(),
            'galery' => DB::table('galeries')->paginate(3)
        ]);
    }

    public function galery()
    {
        return view('user.galery.index', [
            'galery' => Galery::all()
        ]);
    }

    public function news_data()
    {
        return view('user.news.index', [
            'news_data' => News::all()
        ]);
    }

    public function news($id)
    {
        return view('user.news.detail', [
            'news' => News::where('id', $id)->first()
        ]);
    }

    public function profile_history()
    {
        return view('user.profile.history',[
            'history'=> DB::table('sections')->where('section', "Tentang")->first()
        ]);
    }

    public function visi_misi()
    {
        return view('user.profile.visi_misi',[
            'visi'=> DB::table('sections')->where('section', "Visi")->first(),
            'misi'=> DB::table('sections')->where('section', "Misi")->first()
        ]);
    }

    public function dosen()
    {
        return view('user.profile.dosen');
    }

    public function ukm()
    {
        return view('user.ukm.index',[
            'ukm' => Ukm::all()
        ]);
    }

    public function studi()
    {
        return view('user.ukm.studi');
    }

    public function grade()
    {
        return view('user.grade.index');
    }

    public function contact()
    {
        return view('user.contact.index',[
            'section' => Section::all()
        ]);
    }

    public function maba()
    {
        return view('user.maba.index');
    }
}
