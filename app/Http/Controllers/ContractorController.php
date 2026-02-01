<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contractors = Contractor::all();
        return view('admin.contractor.index', ['active' => 'contractor'], compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contractor.create', ['active' => 'contractor']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        $input['slug'] = Str::slug($request->name);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->hashName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Contractor::create($input);

        return redirect('/admin/contractor')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contractor $contractor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contractor $contractor)
    {
        return view('admin.contractor.edit', ['active' => 'contractor'], compact('contractor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contractor $contractor)
    {
        $request->validate([
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

        $input['slug'] = Str::slug($request->name);

        $contractor->update($input);

        return redirect('/admin/contractor')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contractor $contractor)
    {
        $contractor->delete();
        return redirect('/admin/contractor')->with('message', 'Data berhasil dihapus');
    }
}