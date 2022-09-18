<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMiscellaneousPost;
use App\Models\Miscellany;
use Illuminate\Http\Request;

class MiscellaneousController extends Controller
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
        echo view ('dashboard.miscellany.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMiscellaneousPost $request)
    {
        echo "El titulo trae: ".$request->name;

        Miscellany::create($request->validated());
        return back()->with('status','Muchas gracias, tu post fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miscellany  $miscellany
     * @return \Illuminate\Http\Response
     */
    public function show(Miscellany $miscellany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miscellany  $miscellany
     * @return \Illuminate\Http\Response
     */
    public function edit(Miscellany $miscellany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miscellany  $miscellany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miscellany $miscellany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miscellany  $miscellany
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscellany $miscellany)
    {
        //
    }
}
