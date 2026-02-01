<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Portofolio::all();
        return view('admin.portofolio.index', ['active' => 'portofolio'], compact('portofolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portofolio.create', ['active' => 'portofolio']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(rules: [
            'title' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        $input['slug'] = Str::slug($request->title);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->hashName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Portofolio::create($input);

        return redirect('/admin/portofolio')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portofolio $portofolio)
    {
        return view('admin.portofolio.edit', ['active' => 'portofolio'], compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->hashName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $portofolio->update($input);

        return redirect('/admin/portofolio')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect('/admin/portofolio')->with('message', 'Data berhasil dihapus');
    }
}
