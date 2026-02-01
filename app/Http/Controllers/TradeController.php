<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trades = Trade::all();
        return view('admin.trade.index', ['active' => 'trade'], compact('trades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trade.create', ['active' => 'trade']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
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

        Trade::create($input);

        return redirect('/admin/trade')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trade $trade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trade $trade)
    {
        return view('admin.trade.edit', ['active' => 'trade'], compact('trade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trade $trade)
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

        $trade->update($input);

        return redirect('/admin/trade')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trade $trade)
    {
        $trade->delete();
        return redirect('/admin/trade')->with('message', 'Data berhasil dihapus');
    }
}