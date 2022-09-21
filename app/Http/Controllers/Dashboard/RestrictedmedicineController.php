<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restrictedmedicine;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRestictedMedicinePost;

class RestrictedmedicineController extends Controller
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
        //
        echo view ('dashboard.restrictedmedicine.create', ['restrictedmedicine' => new restrictedmedicine()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestictedMedicinePost $request)
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restrictedmedicine  $restrictedmedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Restrictedmedicine $restrictedmedicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restrictedmedicine  $restrictedmedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restrictedmedicine $restrictedmedicine)
    {
        //
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
