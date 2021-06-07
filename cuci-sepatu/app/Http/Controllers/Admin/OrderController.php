<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Treatment;
use App\Models\OrderTreatment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $treatments = Treatment::all();
        return view('admin.order.create', ['treatments' => $treatments]);
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $treatments = Treatment::all();
        return view('admin.order.edit', ['treatments' => $treatments, 'order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update([
            'address' => $request->address,
            'description' => $request->description,
            'item_name' => $request->item_name
        ]);
        return redirect('order')->with('success', 'Treatment Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id)->delete();
        return back()->with('success', 'Pesanan Berhasil Dihapus');
    }
}
