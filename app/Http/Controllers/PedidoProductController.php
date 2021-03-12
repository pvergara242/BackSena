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
        $pedido_products = PedidoProducts::latest()->paginate(6);
        return view('pedidoProductos.index', compact('pedido_products') );
      
    }

    public function create()
    {
        return view('pedidoProductos.create', [
            'pedidoProductos' => new PedidoProducts
        ]);
    }

    public function store(PedidoProductosRequest $request)
    {
        PedidoProducts::create($request->validated() );
        return redirect()->route('pedidoProducto')->with('success', 'El producto ha sido entregado satisfactoriamente ');
    }

    public function show($id)
    {
        return view('pedidoProductos.show', [
            'pedidoProductos' => PedidoProducts::findOrFail($id)
        ]);
    }
    public function edit($id)
    {
        $PedidoProductos = PedidoProducts::find($id);
        return view('pedidoProductos.edit', compact('PedidoProductos'));
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

        $PedidoProductos = PedidoProducts::find($id);
        $PedidoProductos->fechaElaboracion = $request->get('fechaElaboracion');
        $PedidoProductos->instructorEncargado = $request->get('instructorEncargado');
        $PedidoProductos->numeroDocumento = $request->get('numeroDocumento');
        $PedidoProductos->programa = $request->get('programa');
        $PedidoProductos->ficha = $request->get('ficha');
        $PedidoProductos->producto = $request->get('producto');
        $PedidoProductos->valorUnidad = $request->get('valorUnidad');
        $PedidoProductos->cantidadProducir = $request->get('cantidadProducir');
        $PedidoProductos->valorProduccion = $request->get('valorProduccion');
        $PedidoProductos->save();

        return redirect()->route('pedidoProducto')->with('primary', 'La entrega del producto fue actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $PedidoProductos = PedidoProducts::find($id);
        $PedidoProductos->delete();

        return redirect()->route('pedidoProducto')->with('danger', 'La entrega del producto ha sido eliminada correctamente.');
    }
}
