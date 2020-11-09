<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
        
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::latest()->paginate(6);
        return view('products.index', compact('products') );
    }

    public function create()
    {
        return view('products.create', [
            'Products' => new Product
        ]);
    }

    public function store(ProductsRequest $request)
    {
        Product::create($request->validated() );
        return redirect()->route('productos')->with('success', 'El producto ha sido agregado satisfactoriamente ');
    }

    public function show($id)
    {
        return view('products.show', [
            'Products' => Product::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $Products = Product::find($id);
        return view('productos.edit', compact('Products'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'CodigoProducto' => 'required',
            'nombreProducto' => 'required',
            'CantidadProducto' => 'required',
            'consumo' => 'required',
            'MercanciaVenta' => 'required',
            'produccionInterna' => 'required',
            'ManejaLotes' => 'required',
            'esServicio' => 'required',
            'productoActivo' => 'required',
            'DatosFabricante' => 'required',
            'Medidas' => 'required',
            'UbicacionFisica' => 'required',
            'Referencia' => 'required',
            'Presentacion' => 'required',
            'ProductoEquivalente' => 'required',
            'StockMinimo' => 'required',
            'StockMaximo' => 'required',
            'TiempoReposicion' => 'required',
            'CuentaInventarios' => 'required',
            'CuentaContableIngreso' => 'required',
            'CuentaContableIngresoAjuste' => 'required',
            'DevolucionVentas' => 'required',
            'DevolucionCompras' => 'required',
            'CuentaContableGasto' => 'required',
            'CuentaContableGastoAjuste' => 'required',
            'ImpuestoCompras' => 'required',
            'ImpuestoVentas' => 'required',

        ]);

        $Products = Product::find($id);
        $Products->CodigoProducto = $request->get('CodigoProducto');
        $Products->nombreProducto = $request->get('nombreProducto');
        $Products->CantidadProducto = $request->get('CantidadProducto');
        $Products->consumo = $request->get('consumo');
        $Products->MercanciaVenta = $request->get('MercanciaVenta');
        $Products->produccionInterna = $request->get('produccionInterna');
        $Products->ManejaLotes = $request->get('ManejaLotes');
        $Products->esServicio = $request->get('esServicio');
        $Products->productoActivo = $request->get('productoActivo');
        $Products->DatosFabricante = $request->get('DatosFabricante');
        $Products->Medidas = $request->get('Medidas');
        $Products->UbicacionFisica = $request->get('UbicacionFisica');
        $Products->Referencia = $request->get('Referencia');
        $Products->Presentacion = $request->get('Presentacion');
        $Products->ProductoEquivalente = $request->get('ProductoEquivalente');
        $Products->StockMinimo = $request->get('StockMinimo');
        $Products->StockMaximo = $request->get('StockMaximo');
        $Products->TiempoReposicion = $request->get('TiempoReposicion');
        $Products->CuentaInventarios = $request->get('CuentaInventarios');
        $Products->CuentaContableIngreso = $request->get('CuentaContableIngreso');
        $Products->CuentaContableIngresoAjuste = $request->get('CuentaContableIngresoAjuste');
        $Products->ImpuestoCompras = $request->get('ImpuestoCompras');
        $Products->ImpuestoVentas = $request->get('ImpuestoVentas');
        
        $Products->save();

        return redirect()->route('Products')->with('primary', 'El producto fue actualizado  correctamente.');
    }

    public function destroy($id)
    {
        $Products = Product::find($id);
        $Products->delete();

        return redirect()->route('Products')->with('danger', 'El producto ha sido eliminado correctamente');
    }
}
