<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts=$this->postRepository->getAll();
        return view('post.list',compact('posts'));

    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data=$request->only('title','content','user_id');
        $this->postRepository->create($data);
        return redirect()->route('post.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
