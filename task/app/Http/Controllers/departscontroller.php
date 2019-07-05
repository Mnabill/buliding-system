<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\depart;

class departscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departs= depart::all();

        return view('departs.index')->with('departs',$departs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts= new depart();
        $posts->number= $request->input('number');
        $posts->month= $request->input('month');
        $posts->name= $request->input('name');
        $posts->elect= $request->input('elect');
        $posts->water= $request->input('water');
        $posts->monthly= $request->input('monthly');
        $posts->status= $request->input('radio');
        $posts->save();

        // dd('ok');

        return redirect('/departments');
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
        
        $posts= depart();
        $posts->number= $request->input('number');
        $posts->month= $request->input('month');
        $posts->name= $request->input('name');
        $posts->elect= $request->input('elect');
        $posts->water= $request->input('water');
        $posts->monthly= $request->input('monthly');
        $posts->status= $request->input('radio');
        $posts->save();

        // dd('ok');

        return redirect('/departments');

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
