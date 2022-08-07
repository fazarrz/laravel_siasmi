<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ukm.index',[
            'ukm' => Ukm::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ukm.create');
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
            'name' => 'required',
            'image' => 'required|image|file|max:2024'
        ]);

        $file = $request->file('image');
        $fileName = $file->hashName() . '.' . $file->extension();
        $file->move(public_path('img/ukm'), $fileName);

        $validatedData['image'] = $fileName;

        Ukm::create($validatedData);

        return redirect('/ukm')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function show(Ukm $ukm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function edit(Ukm $ukm)
    {
        return view('admin.ukm.edit',[
            'ukm' => $ukm
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ukm $ukm)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        if($request->file('image')) {
            $validatedData = $request->validate([
                'image' => 'image|file|max:2024'
            ]);

            $file = $request->file('image');
            $fileName = $file->hashName() . '.' . $file->extension();
            $file->move(public_path('img/ukm'), $fileName);
    
            $validatedData['image'] = $fileName;
        }

        Ukm::where('id', $ukm->id)->update($validatedData);

        return redirect('/ukm')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukm  $ukm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ukm $ukm)
    {
        Ukm::destroy($ukm->id);
        return redirect('/ukm')->with('success', 'Data berhasil dihapus.');
    }
}
