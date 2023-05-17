<?php

namespace App\Http\Controllers;

use App\Models\pizzes;
use App\Http\Requests\StorepizzesRequest;
use App\Http\Requests\UpdatepizzesRequest;

class PizzesController extends Controller
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
     * @param  \App\Http\Requests\StorepizzesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepizzesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pizzes  $pizzes
     * @return \Illuminate\Http\Response
     */
    public function show(pizzes $pizzes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pizzes  $pizzes
     * @return \Illuminate\Http\Response
     */
    public function edit(pizzes $pizzes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepizzesRequest  $request
     * @param  \App\Models\pizzes  $pizzes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepizzesRequest $request, pizzes $pizzes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pizzes  $pizzes
     * @return \Illuminate\Http\Response
     */
    public function destroy(pizzes $pizzes)
    {
        //
    }
}
