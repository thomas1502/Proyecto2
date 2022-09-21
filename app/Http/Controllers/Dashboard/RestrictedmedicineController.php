<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restrictedmedicine;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRestrictedMedicinePost;

class RestrictedmedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restrictedm=Restrictedmedicine::orderBy('created_at','desc')->cursorpaginate(5);    
        /* $posts=Post::get(); */
        echo view ('dashboard.restrictedmedicine.index',['restrictedm'=>$restrictedm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo view ('dashboard.restrictedmedicine.create', ['restrictedmedicine' => new restrictedmedicine()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestrictedMedicinePost $request)
    {
        //
        echo "El titulo trae: ".$request->name;
        Restrictedmedicine::create($request->validated());
        return back()->with('status','Muchas gracias, tu post fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restrictedmedicine  $restrictedmedicine
     * @return \Illuminate\Http\Response
     */
    public function show(Restrictedmedicine $restrictedmedicine)
    {
        //
        echo view ('dashboard.restrictedmedicine.show', ['restrictedmedicine' => $restrictedmedicine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restrictedmedicine  $restrictedmedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Restrictedmedicine $restrictedmedicine)
    {
        echo view ('dashboard.restrictedmedicine.edit', ['restrictedmedicine' => $restrictedmedicine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restrictedmedicine  $restrictedmedicine
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRestrictedMedicinePost $request, Restrictedmedicine $restrictedmedicine)
    {
        $restrictedmedicine->update($request->validated()); 
        return back()->with('status','Muchas gracias, tu post fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restrictedmedicine  $restrictedmedicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restrictedmedicine $restrictedmedicine)
    {
        //
    }
}
