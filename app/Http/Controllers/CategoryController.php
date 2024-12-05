<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category=Category::get();
        return view('kategori.index',compact('category'));
    }
    public function tambah(){
        return view('kategori.tambah');
    }
    public function aksi_tambah(Request $request){
        $request->validate([
            'title'=>'required'
        ]);
        $data=[
            'title'=>$request->title
        ];
        Category::insert($data);
        return redirect()->route('category');
    }
    public function edit($id){
        $category=Category::where('id',$id)->first();
        return view('kategori.edit',compact('category'));
    }
    public function aksi_edit(Request $request, $id)
    {
        $request->validate([
            'title'=>'required'
        ]);
        $data=[
            'title'=>$request->title
        ];
        Category::where('id',$id)->update($data);
        return redirect()->route('category');
    }
    public function aksi_hapus($id){
        Product::where('category_id', $id)->delete();
        Category::where('id',$id)->delete();
        return redirect()->route('category',);
    }
}
