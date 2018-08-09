<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
Use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->put('search', $request
        ->has('search') ? $request->get('search') : ($request->session()
        ->has('search') ? $request->session()->get('search') : ''));

        $request->session()->put('field', $request
                ->has('field') ? $request->get('field') : ($request->session()
                ->has('field') ? $request->session()->get('field') : 'p_id'));

                $request->session()->put('sort', $request
                        ->has('sort') ? $request->get('sort') : ($request->session()
                        ->has('sort') ? $request->session()->get('sort') : 'asc'));

                $posts = new Post();
                    $posts = $posts->where('p_id', 'like', '%' . $request->session()->get('search') . '%')
                        ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                        ->paginate(10);
                        
                    if ($request->ajax()) {
                        return view('posts.index', compact('posts'));
                    } else {
                        return view('posts.ajax', compact('posts'));
      }
    }
    public function staff()
    {
        $posts = Post::all();
        return view('posts.staff', compact('posts'));

    }

    public function doctor()
    {
        $posts = Post::all();
        return view('posts.doctor', compact('posts'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        Post::create($request->all());
          return redirect('index')->with ('message', 'Record has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        
        Post::find($id)->update($request->all());
        return redirect('index')->with ('message', 'Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('index')->with ('message', 'Record has been deleted successfully');
    }
}
