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
            'pedidoProductos' => new PedidoProducts
        ]);
    }

    public function store(PedidoProductosRequest $request)
    {
        PedidoProducts::create($request->validated() );
        return redirect()->route('pedidoProductos')->with('success', 'El producto ha sido entregado satisfactoriamente ');
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
        return view('pedidoProductos.edit', compact('pedidoProductos'));
    }
    public function update(Request $request, $id)
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
        $PedidoProductos->fechaElaboracion = $request->get('fechaSolicitud');
        $PedidoProductos->instructorEncargado = $request->get('area');
        $PedidoProductos->numeroDocumento = $request->get('codigoRegional');
        $PedidoProductos->programa = $request->get('nombreRegional');
        $PedidoProductos->ficha = $request->get('codigoCentroCostos ');
        $PedidoProductos->producto = $request->get('nombreCentroCostos');
        $PedidoProductos->valorUnidad = $request->get('cordinadorArea');
        $PedidoProductos->cantidadProducir = $request->get('numeroDocumento');
        $PedidoProductos->valorProduccion = $request->get('numeroDocumento');
        $PedidoProductos->save();

        return redirect()->route('PedidoProductos')->with('primary', 'La entrega del producto fue actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $PedidoProductos = PedidoProducts::find($id);
        $PedidoProductos->delete();

        return redirect()->route('pedidoproductos')->with('danger', 'La entrega del producto ha sido eliminada correctamente.');
    }
}
