<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('admin.news.index',[
            'news' => News::all(),
            'allNews' => News::count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|file|max:2024'
        ]);

        $file = $request->file('image');
        $fileName = $file->hashName() . '.' . $file->extension();
        $file->move(public_path('img/berita'), $fileName);

        $validatedData['image'] = $fileName;

        News::create($validatedData);

        return redirect('/news')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',[
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData = $request->validate([
                'image' => 'required|image|file|max:2024'
            ]);

            $file = $request->file('image');
            $fileName = $file->hashName() . '.' . $file->extension();
            $file->move(public_path('img/berita'), $fileName);

            $validatedData['image'] = $fileName;
        }

        News::where('id', $news->id)->update($validatedData);

        return redirect('/news')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);
        return redirect('/news')->with('success', 'Data berhasil dihapus.');
    }
}
