<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contact', ['active' => 'contact'], compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'image',
            'alamat' => 'required',
            'email' => 'required',
            'telepon_1' => 'required',
            'telepon_2' => 'required',
            'maps_embed' => 'required'
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

        if ($logo = $request->file('logo')) {
            $destinationPath = 'image/';
            $logoName = $logo->hashName();
            $logo->move($destinationPath, $logoName);
            $input['logo'] = $logoName;
        } else {
            unset($input['logo']);
        }


        $contact->update($input);

        return redirect('admin/contact')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
