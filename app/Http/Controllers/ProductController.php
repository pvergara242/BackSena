<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

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

    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('Products')->with('success', 'El Docente ha sido agregado satisfactoriamente a la base de datos del sistema');
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
        return view('products.edit', compact('Products'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'document' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            //    'avatar'=>'required',
            'note' => 'required',
            'coment' => 'required',

        ]);

        $Products = Product::find($id);
        $Products->name = $request->get('name');
        $Products->last_name = $request->get('last_name');
        $Products->date_of_birth = $request->get('date_of_birth');
        $Products->email = $request->get('email');
        $Products->phone = $request->get('phone');
        $Products->country = $request->get('country');
        $Products->city = $request->get('city');
        $Products->address = $request->get('address');
        $Products->note = $request->get('note');
        $Products->coment = $request->get('coment');
        $Products->save();

        return redirect()->route('Products')->with('primary', 'El Docente fue actaulizado en la base de datos correctamente.');
    }

    public function destroy($id)
    {
        $Products = Product::find($id);
        $Products->delete();

        return redirect()->route('Products')->with('danger', 'El Docente ha sido eliminado de la base de datos del sistema');
    }
}
