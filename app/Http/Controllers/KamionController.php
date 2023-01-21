<?php

namespace App\Http\Controllers;

use App\Models\Kamion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KamionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Kamioni' => Kamion::all()
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
        $validator = Validator::make($request->all(), [
            'reg_broj' => 'required',
            'kilometraza' => 'required',
            'marka' => 'required',
            'vozac_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'MESSAGE' => $validator->errors()
            ]);
        }

        Kamion::create([
            'reg_broj' => $request->reg_broj,
            'kilometraza' => $request->kilometraza,
            'marka' => $request->marka,
            'vozac_id' => $request->vozac_id,
        ]);

        return response()->json([
            'MESSAGE' => 'Kamion has been created successfully.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'Kamion' => Kamion::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamion $kamion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamion $kamion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kamion::find($id)->delete();
        return response()->json([
            'MESSAGE' => 'Kamion has been delete successfully.'
        ]);
    }
}
