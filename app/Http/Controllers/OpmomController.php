<?php

namespace App\Http\Controllers;

use App\Models\opmom;
use App\Http\Requests\StoreopmomRequest;
use App\Http\Requests\UpdateopmomRequest;

class OpmomController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreopmomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreopmomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\opmom  $opmom
     * @return \Illuminate\Http\Response
     */
    public function show(opmom $opmom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\opmom  $opmom
     * @return \Illuminate\Http\Response
     */
    public function edit(opmom $opmom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateopmomRequest  $request
     * @param  \App\Models\opmom  $opmom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateopmomRequest $request, opmom $opmom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\opmom  $opmom
     * @return \Illuminate\Http\Response
     */
    public function destroy(opmom $opmom)
    {
        //
    }
}
