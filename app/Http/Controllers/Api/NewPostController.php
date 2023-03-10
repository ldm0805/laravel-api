<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class NewPostController extends Controller
{
    public function index(){
        $posts = Project::with('tags','type')->paginate(5);
        // dd($posts);
        return response()->json([
            'success' => true,
            'results' => $posts,
        ]);
    }
    public function show($slug){
        $post = Project::with('tags','type')->where('slug', $slug)->first();

        if($post){
            return response()->json([
                'success' => true,
                'post' => $post,
            ]);
        }else{
            return response()->json([
                'success' => false,
                'error' => 'Nessun post trovato',
            ]);
        }
    }

}
