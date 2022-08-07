<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galery.index',[
            'galeries' => Galery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galery.create');
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
            'image' => 'required|image|file|max:2024'
        ]);

        $file = $request->file('image');
        $fileName = $file->hashName() . '.' . $file->extension();
        $file->move(public_path('img/galeri'), $fileName);

        $validatedData['image'] = $fileName;

        Galery::create($validatedData);

        return redirect('/galeries')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('admin.galery.edit',[
            'galery' => $galery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        if($request->file('image')) {
            $validatedData = $request->validate([
                'image' => 'image|file|max:2024'
            ]);

            $file = $request->file('image');
            $fileName = $file->hashName() . '.' . $file->extension();
            $file->move(public_path('img/galeri'), $fileName);
    
            $validatedData['image'] = $fileName;
        }

        Galery::where('id', $galery->id)->update($validatedData);

        return redirect('/galeries')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        Galery::destroy($galery->id);
        return redirect('/galeries')->with('success', 'Data berhasil dihapus.');
    }
}
