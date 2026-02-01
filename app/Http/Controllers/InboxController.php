<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inboxes = Inbox::all();
        return view('admin.inbox.index', ['active' => 'inbox'], compact('inboxes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'handphone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required'
        ], params: [
            'name.required' => 'Name Required',
            'handphone.required' => 'Enter Mobile Number',
            'email.required' => 'Email Required',
            'message.required' => 'Enter Your Message',
        ]);

        Inbox::create([
            'name' => $request->name,
            'handphone' => $request->handphone,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()->route('contact')->with('success', 'Masukan anda terkirim');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Inbox $inbox)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inbox $inbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inbox $inbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inbox $inbox)
    {
        $inbox->delete();
        return redirect('/admin/inbox')->with('message', 'Data berhasil dihapus');
    }
}
