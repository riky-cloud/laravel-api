<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tbl_posting;
use Auth;
use App\Transforms\PostTransforms;
use App\Transforms\PostingTransforms;

class PostController extends Controller
{
    public function add(Request $req, Post $post)
    {
      $this->validate($req, [
        'isi' => 'required|min:5',
      ]);

      $post = $post->create([
        'user_id' => Auth::user()->id,
        'isi'     => $req->isi,
      ]);

      $response = fractal()
        ->item($post)
        ->transformWith(new PostTransforms)
        ->toArray();

      return response()->json($response, 201);
    }

    public function update(Request $req, Post $post)
    {
      $this->authorize('update', $post);

      $post->isi = $req->get('isi', $post->isi);
      $post->save();

      return fractal()
        ->item($post)
        ->transformWith(new PostTransforms)
        ->toArray();
    }

    public function delete(Post $post)
    {
      $post->delete();

      return response()->json(['message' => 'post terhapus']);
    }

    public function posting(Tbl_posting $post)
    {
      $post = $post->all();

      $response = fractal()
        ->collection($post)
        ->transformWith(new PostingTransforms)
        ->toArray();

      return response()->json($response, 201);


    }
}
