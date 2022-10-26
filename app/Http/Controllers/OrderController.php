<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $ordenes = Order::all();
        return view('orders.index',compact('ordenes'));
    }

    public function create(){
        return view('orders.create');
    }

    public function store(Request $request){
        $orden = new Order();

        $orden->ot=$request->ot;
        $orden->fecha=$request->fecha;
        $orden->bol=$request->bol;
        $orden->tipo_orden=$request->tot;
        $orden->observacion=$request->observacion;
        $orden->id_sede=$request->sede;
        $orden->id_proceso=$request->proceso;
        $orden->id_contrato=$request->contrato;
        $orden->id_statu=3;
        $orden->id_user=$request->id_user;

        if($orden->save()){
            return redirect()->route('orders.index');
        }

    }
}
