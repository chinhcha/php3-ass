<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $new_post = DB::table('posts')
            ->join('categories',  'categories.id', '=', 'posts.category_id')
            ->select('posts.*', 'categories.name as cate')
            ->get();
            $view_post = DB::table('posts')
            ->join('categories',  'categories.id', '=', 'posts.category_id')
            ->select('posts.*', 'categories.name as cate')
            ->get();
         $cate =   DB::table('categories')
             ->leftJoin('posts', 'categories.id', '=', 'posts.category_id')
             ->selectRaw('categories.name, categories.id as category_id, COUNT(posts.id) as tong, categories.image ')
             ->groupBy('categories.name', 'categories.id')
             ->orderBy('tong', 'desc')
             ->get() ;
        $data = [
            'posts_new' => $new_post,
            'view_post' => $view_post,
            'cate' => $cate
        ];
        return view("client.home", compact('data'));
    }
}
