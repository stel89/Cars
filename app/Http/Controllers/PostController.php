<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;
use View;
use Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $date=date('d.m.Y');
            $root=$_SERVER['DOCUMENT_ROOT']."/img/";
            if(!file_exists($root.$date))    {mkdir($root.$date);}
            $f_name=$request->file('image')->getClientOriginalName();
            $request->file('image')->move($root.$date,$f_name);
            $all=$request->all();
            $all['image']="/img/".$date."/".$f_name;
            $all['author_id'] = Auth::id();

            $size = str_replace(".",",",$all['size']);
            $all['size']= $size;

        $trial = str_replace(".",",",$all['trial']);
        $all['trial']= $trial;


            Post::create($all);

        //echo($all['trial']);

            return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        $users = User::all();

        return view('single', ['post' => $post, 'users' => $users]);
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
