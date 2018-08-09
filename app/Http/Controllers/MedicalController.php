<?php

namespace App\Http\Controllers;

use App\Medical;
use Illuminate\Http\Request;
use App\Http\Requests\MedicalRequest;
Use Illuminate\Support\Facades\Validator;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function medindex(Request $request)
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

                $medicals = new Medical();
                    $medicals  = $medicals ->where('p_id', 'like', '%' . $request->session()->get('search') . '%')
                        ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                        ->paginate(5);                   
                    return view('posts.medindex', compact('medicals'));
                         
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.medcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicalRequest $request)
    {
        Medical::create($request->all());
        return redirect('medindex')->with ('message', 'Record has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicals = Medical::find($id);
        return view('posts.medshow', compact('medicals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicals = Medical::find($id);
        return view('posts.mededit', compact('medicals'));
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
        Medical::find($id)->update($request->all());
        return redirect('medindex')->with ('message', 'Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medical::find($id)->delete();
        return redirect('medindex')->with ('message', 'Record has been deleted successfully');
    }
}
