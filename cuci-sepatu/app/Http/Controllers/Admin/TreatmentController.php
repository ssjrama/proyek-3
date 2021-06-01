<?php

namespace App\Http\Controllers\Admin;

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
    public function index()
    {
        $treatments = Treatment::all();
        return view('admin.treatment.index', ['treatments' => $treatments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.treatment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required'
        ]);
        
        $treatment = new Treatment;
        $treatment->name = $request->name;
        $treatment->price = $request->price;
        $treatment->duration = $request->duration;
        $treatment->save();

        return back()->with('success', 'Treatment Baru Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatment = Treatment::find($id);
        return view('admin.treatment.edit', ['treatment' => $treatment]);
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
        $treatment = Treatment::find($id);
        $treatment->update([
            'name' => $request->name,
            'price' => $request->price,
            'duration' => $request->duration
        ]);

        return redirect('/treatment')->with('success', 'Treatment Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $treatment = Treatment::find($id)->delete();
        return back()->with('success', 'Treatment Berhasil Dihapus');
    }
}
