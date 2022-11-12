<?php

namespace App\Http\Controllers;

use App\Models\warga;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('warga.v_datawarga', ['warga' => Warga::all] );
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
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(warga $warga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, warga $warga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(warga $warga)
    {
        //
    }
}
