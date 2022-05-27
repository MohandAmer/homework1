<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Http\Requests\StorecoursesRequest;
use App\Http\Requests\UpdatecoursesRequest;

class CoursesController extends Controller
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
     * @param  \App\Http\Requests\StorecoursesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecoursesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecoursesRequest  $request
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecoursesRequest $request, courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(courses $courses)
    {
        //
    }
}
