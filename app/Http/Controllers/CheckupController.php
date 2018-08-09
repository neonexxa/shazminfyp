<?php

namespace App\Http\Controllers;

use App\Checkup;
use Illuminate\Http\Request;
use App\Http\Requests\CheckupRequest;
Use Illuminate\Support\Facades\Validator;

class CheckupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $param = $request->all();
        if (empty($param)) {
            $posts = Checkup::paginate(5);
            return view('posts.cekindex', compact('posts'));
        }else{
            $searchinput = $param['search'];
            $posts = Checkup::where('cek_id', 'like', '%' . $searchinput . '%')->latest()->paginate(5);
            // dd($posts);
            return view('posts.cekindex', compact('posts','searchinput'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.cekcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckupRequest $request)
    {
        Checkup::create($request->all());
        return redirect('cekindex')->with ('message', 'Record has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Checkup::find($id);
        return view('posts.cekshow', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Checkup::find($id);
        return view('posts.cekedit', compact('post'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Checkup::find($id)->update($request->all());
        return redirect()->route('Checkup.index')->with ('message', 'Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Checkup::find($id)->delete();
        return redirect()->route('Checkup.index')->with ('message', 'Record has been deleted successfully');
    }
}
