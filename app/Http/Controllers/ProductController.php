<?php

namespace App\Http\Controllers;
use App\Models\CategoryProduct;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $products = Products::with('CategoryProduct')->orderBy('id', 'asc');

        if(request('search')){
            $products->where('nm_products', 'like', '%'. request('search') . '%' )
            ->orWhere('price', 'like', '%' . request('search'));
        }
        return view('products.products', ['title' => 'All products', 'products' => $products->paginate('9')]);
    }

    public function show(Products $product){
        // $product = Products::get
        return view('products.post',
        ['title' => $product->nm_products,
        'product' => $product]);
    }

    public function dashboardindex(){
        $products = Products::with('CategoryProduct');

        if(request('search')){
            $products->where('nm_products', 'like', '%'. request('search') . '%' )
            ->orWhere('price', 'like', '%' . request('search'))->orWhere('id', 'like' , '%' . request('search'));
        }

        return view('d.products.index', ['products' => $products->get(), 'title' => 'Product']);
    }

    public function create(Request $request)
    {

        $categoryproduct = CategoryProduct::all();
        $products = Products::all();
        return view('d.products.create', ['products' => $products,  'title' => 'Buat data Products', 'categoryproduct' => $categoryproduct]);
        products::create($request->all());
        return redirect('/dashboard/product')->with('success', 'Data products Berhasil Dibuat');
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nm_products' => 'required',
            'category_products_id' => 'required',
            'quantity' => 'required',
            'deskripsi' => 'nullable',
            'price' => 'required',
            'slug' => 'nullable',
            'image' => 'nullable|image|file|max:1024'
        ]);

        if($request->file('image')){
            $image = $validatedData['image'] = $request->file('image')->store('product-images');
        }

        Products::create([
            'nm_products' => $request->nm_products,
            'category_products_id' => $request->category_products_id,
            'quantity' => $request->quantity,
            'deskripsi' => $request->deskripsi,
            'price' => $request->price,
            'slug' => Str::slug($request->nm_products),
            'image' => $image
        ]);
        return redirect('/dashboard/product')->with('success', 'Data products Berhasil Dibuat');
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
    return view('d.products.edit', ['product'=> $product, 'title' => 'Edit data products', 'categoryproduct' => CategoryProduct::all()]);

    }
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->update($request->all());
        return redirect('/dashboard/product')->with('success','Product  Berhasil di Perbarui');
    }

    public function delete($id){
        $product = Products::findOrFail($id);
        $product->delete($product);
        return redirect('/dashboard/product')->with('success','Product Sukses Di Dihapus');
    }

}