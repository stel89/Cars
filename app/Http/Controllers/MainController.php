<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use View;
use Response;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(3);
        $users = User::all();

        if ($request->ajax()) {
           return view('posts',['posts' => $posts, 'users' => $users]);
        }

        return view('main',['posts' => $posts, 'users' => $users]);
    }

    public function search(Request $request)
    {
        $search =[];

        if ($request['region'] <> '0')
        {
        array_push($search,array('region','=', $request['region']));
        }
        if ($request['town'] <> '0')
        {
            array_push($search,array('town','=', $request['town']));
        }
        if (trim($request['model']) <> '')
        {
            array_push($search,array('model','=', trim($request['model'])));
        }
        if (trim($request['mark']) <> '')
        {
            array_push($search,array('mark','=', trim($request['mark'])));
        }
        if (trim($request['size']) <> '')
        {
            $request['size'] = str_replace(".",",", $request['size']);
            array_push($search,array('size','=', trim($request['size'])));
        }
        if (trim($request['owner']) <> '')
        {
            array_push($search,array('owner','=', trim($request['owner'])));
        }
        if (trim($request['trial_from']) <> '')
        {
            $request['trial_from'] = str_replace(".",",", $request['trial_from']);
            array_push($search,array('trial','>=', trim($request['trial_from'])));
        }
        if (trim($request['trial_to']) <> '')
        {
            $request['trial_to'] = str_replace(".",",", $request['trial_to']);
            array_push($search,array('trial','<=', trim($request['trial_to'])));
        }

        $posts = DB::table('posts')->where($search)->orderBy('id', 'desc')->paginate(3);

        $users = User::all();

        if ($request->ajax()) {
            //return Response::json(View::make('posts', array('posts' => $posts))->render());
            return view('posts',['posts' => $posts, 'users' => $users]);
        }

        return view('search',['posts' => $posts, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
