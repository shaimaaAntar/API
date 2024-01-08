<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        $msg = ["ok"];
        return response($posts,200,$msg);
    }
public function show($id){

        $post = Post::find($id);

        if($post){
 $msg = ["ok"];
        return response($post,200,$msg);
            
        }
        return response(null,'The post Not Found',404);

    }

}
