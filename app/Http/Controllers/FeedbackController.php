<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
Use Illuminate\Support\Facades\Validator;
use Auth;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $param = $request->all();
        $posts = Feedback::latest()->paginate(10);
        if (Auth::check()) {
            if (empty($param)) {
                return view('posts.feedback', compact('posts'));
            }else{
                $searchinput = $param['search'];
                $posts = Feedback::where('f_id', 'like', '%' . $searchinput . '%')->latest()->paginate(10);
                return view('posts.feedback', compact('posts','searchinput'));
            }
        }else{
            return view('posts.feedback3', compact('posts'));    
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.inputfeedbac');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackRequest $request)
    {
        Feedback::create($request->all());
        return redirect()->route('Feedback.index')->with ('message', 'Feedback has been sent!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Feedback::find($id);
        return view('posts.feedback2', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
