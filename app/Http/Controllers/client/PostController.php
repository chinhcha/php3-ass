<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class PostController extends Controller
{
    public function index(string $id){
        $posts =  DB::table('posts')
        ->join('categories',  'categories.id', '=', 'posts.category_id')
        ->select('posts.*', 'categories.name as cate')
        ->where('posts.id','=',$id)
        ->first();

  $cate = DB::table('categories')
  ->leftJoin('posts', 'categories.id', '=', 'posts.category_id')

  ->get() ;
  $comments = DB::table('comments')
  ->join('users',  'users.id', '=', 'comments.user_id')
  ->select('users.*', 'comments.name as cate')
  ->get();
  $tags = DB::table('tags')
  ->get();

        return view("client.layouts.details.chitiet", compact(['posts','cate','comments','tags']));
    }


    public function search(Request $request){
        $keyword = $request->all();
         $data = Post::where('title', 'LIKE', '%' . $keyword['blog'] . '%')
            ->orWhere('content', 'LIKE', '%' .$keyword['blog'] . '%')
             ->get();
            return view('client.layouts.details.details_product', compact('data'));
    }
}
