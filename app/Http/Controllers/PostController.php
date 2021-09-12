<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
        {
            return response()->json(Post::with(['category', 'user'])->orderBy('date', 'desc')->paginate(10)->toArray());
        }

    public function details($id) {
        return response()->json(Post::where('id', $id)->first()->toArray()); 
    }   
    
    public function update(Request $request, $id) {
        $post = Post::where('id', $id)->first();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->is_active = $request->is_active == true ? 1 : 0;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->save();

        return response()->json([
            'message' => 'Post został wyedytowany'
        ]);
    }

        public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->date = date('Y-m-d');
        $post->description = $request->description;
        $post->is_active = $request->is_active == true ? 1 : 0;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->save();

        return response()->json([
            'message' => 'Nowy post został dodany'
        ]);
    }

    public function destroy($id) {
        $post = Post::where('id', $id)->first();
        $post->delete();

        return response()->json([
            'message' => 'Post został usunięy'
        ]);
    }
}
