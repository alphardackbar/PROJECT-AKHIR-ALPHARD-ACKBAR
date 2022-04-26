<?php

namespace App\Http\Controllers;

use App\Models\Jobside;
use App\Http\Requests\StoreJobsideRequest;
use App\Http\Requests\UpdateJobsideRequest;

class JobsideController extends Controller
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
     * @param  \App\Http\Requests\StoreJobsideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobsideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobside  $jobside
     * @return \Illuminate\Http\Response
     */
    public function show(Jobside $jobside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobside  $jobside
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobside $jobside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobsideRequest  $request
     * @param  \App\Models\Jobside  $jobside
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobsideRequest $request, Jobside $jobside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobside  $jobside
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobside $jobside)
    {
        //
    }
}
