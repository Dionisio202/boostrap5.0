<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected static $url="http://localhost/Producto/servicios/api.php";
    public function index(Request $request)
    {
        $nombre=$request->input('nombre');
        if($nombre!=null){
            $producto=Http::get(static::$url."?nombre=".$nombre."&&tipo=bodega");
            $arrays=$producto->json();
        }else{
            $arrays=[];
        }
       
      
        return view('mostrar',compact('arrays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto=Http::get(static::$url.'?nombre='.$id."&&tipo=sd")->json();
        $arrays=collect($producto)->firstWhere('codigo',$id);
        return view('edit',with(['dormir'=>$arrays]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cantidad = $request ->input('cantidad');
        $bodega = $request ->input('bodega');
        $producto = $request ->input('codigo');

        $data = [
            'cantidad'=> $cantidad,
            'bodega'=> $bodega,
            'producto'=> $producto,
        ];
        Http::asForm()->put(static::$url, $data);
        return redirect("/producto");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
