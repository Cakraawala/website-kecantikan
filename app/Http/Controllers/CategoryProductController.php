<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryProductController extends Controller
{
    public function index(CategoryProduct $category){
        $products = Products::where('category_products_id', $category->id)->inRandomOrder()->get();
        $title = $category->nm_category;
        // dd($products);
        return view('products.category', compact('title','products'));
    }

    public function dashboardindex(){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $categoryproduct = CategoryProduct::with('products')->orderBy('id', 'desc');
        if(request('search')){
            $categoryproduct->where('nm_category', 'like', '%'. request('search') . '%' )
            ->orWhere('id', 'like', '%' . request('search'));
        }
        return view('d.categoryproduct.index', ['categoryproduct' => $categoryproduct->get(), 'title' => 'Category Product']);
    }

    public function show($id){
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $category = CategoryProduct::findOrFail($id);
        $title = $category->nm_category;
        $product = Products::where('category_products_id','=', $id)->get();
        // dd($product);
        return view('d.categoryproduct.show', compact('category', 'product', 'title'));
    }

    public function create(Request $request)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        return view('d.categoryproduct.create', ['categoryproduct' => CategoryProduct::all(),  'title' => 'Buat data CategoryProduct']);
        categoryproduct::create($request->all());
        return redirect('/dashboard/categoryproduct')->with('success', 'Data Category product Berhasil Dibuat');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nm_category' => 'required',
            'slug' => 'nullable',
            'image'=> 'nullable|image|file|max:2048',
            'description' => 'nullable',
        ]);

        if($request->file('image')){
            $image = $validate['image']= $request->file('image')->store('catpro-images');
        }
        categoryproduct::create([
            'nm_category'=> $request->nm_category,
            'slug' => Str::slug($request->nm_category),
            'image' => $image,
            'description' => $request->description
        ]);
        return redirect('/dashboard/categoryproduct')->with('success', 'Data Category Product Berhasil Dibuat');
    }

    public function edit($id)
    {
        if(auth()->guest()){
            return redirect('/');
        }
        if(auth()->user()->is_admin == 0){
            abort(404);
        }
        $categoryproduct = categoryproduct::findOrFail($id);
        return view('d.categoryproduct.edit', ['categoryproduct'=> $categoryproduct, 'title' => 'Edit data categoryproduct']);

    }

    public function update(Request $request, $id)
    {
        $categoryproduct = categoryproduct::findOrFail($id);
        $categoryproduct->update($request->all());
        return redirect('/dashboard/categoryproduct')->with('success','Category Product  Berhasil di Perbarui');
    }

    public function delete($id){
        $categoryproduct = categoryproduct::findOrFail($id);
        $categoryproduct->delete($categoryproduct);
        return redirect('/dashboard/categoryproduct')->with('success','Category Product Sukses Di Dihapus');
    }

}
