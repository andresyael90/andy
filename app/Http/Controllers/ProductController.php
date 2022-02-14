<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
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
        return view('products.show');
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
