<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class NewPostController extends Controller
{
    public function index(){
        $posts = Project::with('tags','type')->paginate(5);
        dd($posts);
        return response()->json([
            'success' => true,
            'results' => $posts,
        ]);
    }

}
