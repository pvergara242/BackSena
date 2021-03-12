<?php

namespace App\Http\Controllers;

use App\PedidoProducts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\PedidoProductosRequest;

class PedidoProductController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
        
        $this->middleware('auth');
    }

    public function index()
    {
        $pedidoProductos = PedidoProducts::latest()->paginate(6);
        return view('pedidoProductos.index', compact('pedidoProductos') );
      
    }

    public function create()
    {
        return view('pedidoProductos.create', [
            'pedidoProductos' => new CreatePedidoProducts
        ]);
    }

    public function store(PedidoProductosRequest $request)
    {
        CreatePedidoProducts::create($request->validated() );
        return redirect()->route('pedidoProductos')->with('success', 'El producto ha sido entregado satisfactoriamente ');
    }

    public function show($id)
    {
        return view('pedidoProductos.show', [
            'pedidoProductos' => CreatePedidoProducts::findOrFail($id)
        ]);
    }
    public function edit($id)
    {
        $PedidoProductos = CreatePedidoProducts::find($id);
        return view('pedidoProductos.edit', compact('pedidoProductos'));
    }
    public function update(PedidoProductosRequest $request, $id)
    {
        $request->validate([
            'fechaElaboracion' => 'required',
            'instructorEncargado'  => 'required',
            'numeroDocumento'  => 'required',
            'programa' => 'required',
            'ficha' => 'required',
            'producto' => 'required',
            'valorUnidad' => 'required',
            'cantidadProducir' => 'required',
            'valorProduccion' => 'required',
        ]);

        $PedidoProductos = CreatePedidoProducts::find($id);
        $PedidoProductos->fechaElaboracion = $request->get('fechaElaboracion');
        $PedidoProductos->instructorEncargado = $request->get('instructorEncargado');
        $PedidoProductos->numeroDocumento = $request->get('numeroDocumento');
        $PedidoProductos->programa = $request->get('programa');
        $PedidoProductos->ficha = $request->get('ficha ');
        $PedidoProductos->producto = $request->get('producto');
        $PedidoProductos->valorUnidad = $request->get('valorUnidad');
        $PedidoProductos->cantidadProducir = $request->get('cantidadProducir');
        $PedidoProductos->valorProduccion = $request->get('valorProduccion');
        $PedidoProductos->save();

        return redirect()->route('PedidoProductos')->with('primary', 'La entrega del producto fue actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $PedidoProductos = CreatePedidoProducts::find($id);
        $PedidoProductos->delete();

        return redirect()->route('pedidoproductos')->with('danger', 'La entrega del producto ha sido eliminada correctamente.');
    }
}
