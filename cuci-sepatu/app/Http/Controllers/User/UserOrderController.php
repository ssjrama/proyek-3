<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use App\Models\Order;
use App\Models\OrderTreatment;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatment::all();
        return view('user.order.index', ['treatments' => $treatments]);
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
        $this->validate($request,[
            'treatment' => 'required',
        ]);
        
        $order = new Order;
        $order->user_id = $request->user()->id;
        $order->address = $request->address;
        $order->description = $request->description;
        $order->item_name = $request->item_name;
        $order->save();

        foreach($request->treatment as $treatment){
            $order_treatment = new OrderTreatment;
            $order_treatment->order_id = $order->id;
            $order_treatment->treatment_id = $treatment;
            $order_treatment->save();
        }

        return back()->with('success', 'Pesanan Baru Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
