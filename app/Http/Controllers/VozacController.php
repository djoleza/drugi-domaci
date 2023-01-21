<?php

namespace App\Http\Controllers;

use App\Models\Vozac;
use Illuminate\Http\Request;

class VozacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Vozaci' => Vozac::all()
        ]);
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
     * @param  \App\Models\Vozac  $vozac
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'Vozac' => Vozac::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vozac  $vozac
     * @return \Illuminate\Http\Response
     */
    public function edit(Vozac $vozac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vozac  $vozac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vozac $vozac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vozac  $vozac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vozac $vozac)
    {
        //
    }
}
