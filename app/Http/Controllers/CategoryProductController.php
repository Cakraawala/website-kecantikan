<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(CategoryProduct $category){
        // $category = CategoryProduct::with('products')->orderBy('id', 'asc');
        return view('products.category', [
            'title' => $category->nm_category,
            'products' => $category->products
        ]);
    }

    public function dashboardindex(){
        $categoryproduct = CategoryProduct::with('products')->orderBy('id', 'asc');
        if(request('search')){
            $categoryproduct->where('nm_category', 'like', '%'. request('search') . '%' )
            ->orWhere('id', 'like', '%' . request('search'));
        }
        return view('d.categoryproduct.index', ['categoryproduct' => $categoryproduct->get(), 'title' => 'Category Product']);
    }

    public function create(Request $request)
    {
        return view('d.categoryproduct.create', ['categoryproduct' => CategoryProduct::all(),  'title' => 'Buat data CategoryProduct']);
        categoryproduct::create($request->all());
        return redirect('/dashboard/categoryproduct')->with('success', 'Data Category product Berhasil Dibuat');
    }
    public function store(Request $request)
    {
        categoryproduct::create($request->all());
        return redirect('/dashboard/categoryproduct')->with('success', 'Data Category Product Berhasil Dibuat');
    }

    public function edit($id)
    {
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
