<?php

namespace App\Http\Controllers;

use App\Models\Skola;
use Illuminate\Http\Request;
use App\Http\Resources\SkolaResource;
use Illuminate\Support\Facades\Validator;

class SkolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skole = Skola::all();
        return SkolaResource::collection($skole);
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
            'naziv' => 'required|string',
            'grad' => 'required|string',
            'adresa' => 'required|string',
            'skola_email' => 'required|email',
            'direktor' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors()]);
        }

        $skola = Skola::create([
            'naziv' => $request->naziv,
            'grad' => $request->grad,
            'adresa' => $request->adresa,
            'skola_email' => $request->skola_email,
            'direktor' => $request->direktor,
        ]);

        return response()->json(['Škola je sačuvana!.', new SkolaResource($skola)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function show(Skola $skola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function edit(Skola $skola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skola $skola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skola $skola)
    {
        $skola->delete();
        return response()->json(['Škola je obrisana!', new SkolaResource($skola)]);
    }
}
