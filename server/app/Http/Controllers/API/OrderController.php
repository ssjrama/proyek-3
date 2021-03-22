<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->is_admin == 1) {
            $order = Order::all();

            return response()->json(
                [
                    'message' => 'Data data order',
                    'data' => $order
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
        $order = new Order;
        $order->customer = $request->user()->id;
        $order->treatments = $request->treatments;
        $order->total = $request->total;
        $order->save();

        return response()->json(
            [
                'message' => 'Pesanan berhasil dibuat',
                'data' => $order
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $order = Order::find($id);

        return response()->json(
            [
                'message' => 'Data order',
                'data' => $order
            ],
            200
        );
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
            'customer' => $request->user()->id,
            'treatments' => $request->treatments,
            'total' => $request->total
        ]);

        return response()->json(
            [
                'message' => 'Pesanan berhasil diupdate',
                'data' => $order
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $order = Order::find($id)->delete();

        return response()->json(
            [
                'message' => 'Data berhasil dihapus',
            ],
            200
        );
    }
}
