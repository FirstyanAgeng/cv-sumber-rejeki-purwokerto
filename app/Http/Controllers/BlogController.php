<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', ['active' => 'blog'], compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create', ['active' => 'blog']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'image_1' => 'required|image'
        ]);
        // $input = $request->all();

        $user = Auth::user();
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->content = $request->content;
        $blog->kategori = $request->kategori;

        if ($image = $request->file('image_1')) {
            $destinationPath = 'image/';
            $imageName = $image->hashName();
            $image->move($destinationPath, $imageName);
            $request->image_1 = $imageName;
        }

        $blog->image_1 = $request->image_1;
        $blog->slug = Str::slug($request->title);
        $blog->user_id = $user->id;

        $blog->save();
        // Blog::create($input);
        return redirect('/admin/blog')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', ['active' => 'blog'], compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image_1' => 'image_1'
        ]);

        $input = $request->all();

        if ($image = $request->file('image_1')) {
            $destinationPath = 'image/';
            $imageName = $image->hashName();
            $image->move($destinationPath, $imageName);
            $input['image_1'] = $imageName;
        } else {
            unset($input['image']);
        }

        $input['slug'] = Str::slug($request->title);

        $blog->update($input);

        return redirect('/admin/blog')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/admin/blog')->with('message', 'Data berhasil dihapus');
    }
}
