<?php

namespace App\Http\Controllers;

use App\Daftar;
use Illuminate\Http\Request;
use App\Http\Requests\DaftarRequest;
Use Illuminate\Support\Facades\Validator;

class DaftarController extends Controller
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
            $daftars = Daftar::latest()->paginate(5);
            return view('posts.regindex', compact('daftars'));
        }else{
            $searchinput = $param['search'];
            $daftars = Daftar::where('reg_id', 'like', '%' . $searchinput . '%')->latest()->paginate(5);
            return view('posts.regindex', compact('daftars','searchinput'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.regcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DaftarRequest $request)
    {
        Daftar::create($request->all());
        return redirect()->route('Daftar.index')->with ('message', 'Record has been added successfully');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftars = Daftar::find($id);
        return view('posts.regshow', compact('daftars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftars = Daftar::find($id);
        return view('posts.regedit', compact('daftars'));
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
        Daftar::find($id)->update($request->all());
        return redirect()->route('Daftar.index')->with ('message', 'Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Daftar::find($id)->delete();
        return redirect()->route('Daftar.index')->with ('message', 'Record has been deleted successfully');
    }
}
