<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->is_admin == 1) {
            $treatment = Treatment::all();

            return response()->json(
                [
                    'message' => 'Data data treatment',
                    'data' => $treatment
                ],
                200
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user()->is_admin == 1) {

            $treatment = new Treatment;
            $treatment->name = $request->name;
            $treatment->price = $request->price;
            $treatment->save();

            return response()->json(
                [
                    'message' => 'Data treatment berhasil ditambahkan',
                    'data' => $treatment
                ],
                200
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if ($request->user()->is_admin == 1) {
            $treatment = Treatment::find($id);

            return response()->json(
                [
                    'message' => 'Data treatment',
                    'data' => $treatment
                ],
                200
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->user()->is_admin == 1) {

            $treatment = Treatment::find($id);
            $treatment->update([
                'name' => $request->name,
                'price' => $request->price
            ]);

            return response()->json(
                [
                    'message' => 'Data treatment berhasil diubah',
                    'data' => $treatment
                ],
                200
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->user()->is_admin == 1) {
            $treatment = Treatment::find($id)->delete();

            return response()->json(
                [
                    'message' => 'Data berhasil dihapus',
                ],
                200
            );
        }
    }
}
