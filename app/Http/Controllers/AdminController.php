<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    // public function index()
    // {
    //     $categories = User::all();
    //     return view('cate.list', compact('categories'));
    // }

    // public function create()
    // {
    //     return view('categories.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255',
    //         'description' => 'nullable',
    //     ]);

    //     Category::create($request->all());

    //     return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    // }

    // public function show(Category $category)
    // {
    //     return view('categories.show', compact('category'));
    // }

    // public function edit(Category $category)
    // {
    //     return view('categories.edit', compact('category'));
    // }

    // public function update(Request $request, Category $category)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255',
    //         'description' => 'nullable',
    //     ]);

    //     $category->update($request->all());

    //     return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    // }

    // public function destroy(Category $category)
    // {
    //     $category->delete();

    //     return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    // }
}


