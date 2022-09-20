<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Mix;
use App\Http\Requests\StoreMixPost;
use Illuminate\Http\Request;

class MixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mixes=Mix::orderBy('created_at','desc')->cursorpaginate(5);    
        /* $posts=Post::get(); */
        echo view ('dashboard.mix.index',['mixes'=>$mixes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo view ('dashboard.mix.create',['mix' => new mix()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMixPost $request)
    {
        Mix::create($request->validated());
        return back()->with('status','Muchas gracias, tu post fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function show(Mix $mix)
    {
        echo view ('dashboard.mix.show', ['mixx' => $mix]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function edit(Mix $mix)
    {
        //
        echo view ('dashboard.mix.edit', ['mix' => $mix]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMixPost $request, Mix $mix)
    {
        //
        $mix->update($request->validated()); 
        return back()->with('status','Muchas gracias, tu post fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mix $mix)
    {
        //
        $mix->delete();
        return back()->with('status','POST borrado!');
    }
}
