<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use App\Http\Resources\ProfesorResource;
use Illuminate\Support\Facades\Validator;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesori = Profesor::all();
        return ProfesorResource::collection($profesori);
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
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'jmbg' => 'required|string',
            'email' => 'required|email',
            'adresa' => 'required|string',
            'predmet' => 'required|string',
            'skola_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors()]);
        }

        $profesor = Profesor::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'jmbg' => $request->jmbg,
            'email' => $request->email,
            'adresa' => $request->adresa,
            'predmet' => $request->predmet,
            'skola_id' => $request->skola_id,
        ]);

        return response()->json(['Profesor je sačuvan!.', new ProfesorResource($profesor)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return response()->json(['Profesor je obrisan!', new ProfesorResource($profesor)]);
    }
}
