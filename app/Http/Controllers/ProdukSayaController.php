<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProdukSayaController extends Controller
{
    public function index(){
        $products=Product::get();
        return view('data_produk.index',compact('products'));
    }
    public function tambah(){
        $category=Category::get();
        return view('data_produk.tambah',compact('category'));
    }
    public function aksi_tambah(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'category_id'=>'required',
            'file'=>'required'
        ]);
        $data=[
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'description'=>$request->description,
        ];
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // 939393929.png
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // pindahkan->ke folder public->folder blog
            $file->move(public_path('data_produk'), $filename);
            $data['file'] = 'data_produk/' . $filename;
          }
          Product::insert($data);
          return redirect()->route('product');
    }
    public function edit($id){
        $category=Category::get();
        $products=Product::where('id',$id)->first();
        return view('data_produk.edit',compact('category', 'products'));
    }
    public function aksi_edit(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'category_id'=>'required',
        ]);
        $data=[
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'description'=>$request->description,
        ];
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // 939393929.png
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // pindahkan->ke folder public->folder blog
            $file->move(public_path('products'), $filename);
            $data['file'] = 'products/' . $filename;
          }
          product::where('id',$id)->update($data);
          return redirect()->route('data_produk');
    }
    public function aksi_hapus($id){
        Product::where('id',$id)->delete();
        return redirect()->route('data_produk');
    }
}
