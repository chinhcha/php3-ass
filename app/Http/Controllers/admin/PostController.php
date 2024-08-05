<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::query()->with(['category'])->latest('id')->get();


        return view('admin.products.list', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::query()->get();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('image');
        //    dd($request->all());
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put("posts", $request->file('image'));
        }
        Post::query()->create($data);


        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Tạo mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::query()->findOrFail($id);
        return view('admin.products.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $post = Post::query()
        ->with('category')
        ->findOrFail($id);
        $categories = Category::query()->get();

        return view('admin.products.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::query()->with('category')->findOrFail($id);
        $data = $request->except('image');
        //    dd($request->all());
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put("posts", $request->file('image'));
            if (!empty($post->image) && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }
        }
        $post->update($data);

        return redirect()->route('admin.products.index', compact('post'))
        ->with('success', 'Sửa  thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $post->tags()->delete();
        $post = Post::query()->findOrFail($id);

        $post->delete();



        return back()->with('success', 'Xóa thành công');
    }
}
