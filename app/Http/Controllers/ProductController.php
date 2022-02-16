<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index')->with([
            'products'=>Product::all(),
        ]);
    }
    public function create()
    {
        return 'No hay nadie que ame el dolor mismo, que lo busque, lo encuentre y lo quiera, simplemente porque es el dolor (create)';
    }
    public function store()
    {
        //
    }
    public function show($product)
    {
        $product=Product::findOrFail($product);
        return view('products.show')->with([
            'product'=>$product,
        ]);
    }
    public function edit($product)
    {
        return "No hay nadie que ame el dolor mismo, que lo busque, lo encuentre y lo quiera, simplemente porque es el dolor (edit)=id -> {$product}";
    }
    public function update()
    {
        //
    }
    public function destroy()
    {
        //
    }
}
