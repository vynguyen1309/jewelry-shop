<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //user
    public function showProduct()
    {

        //lay tat ca du lieu
        $categories = Category::all();
        $products = Product::orderByDesc('id')->paginate(8);
        return view('users.products.listProduct', compact('products','categories'));
    }
    public function showNewProduct()
    {

        //lay tat ca du lieu
        $categories = Category::all();
        $newProducts = Product::orderByDesc('id')->paginate(4);

        return view('users.home', compact('newProducts','categories'));
    }
    //admin

    public function listProduct()
    {

        //lay tat ca du lieu
        $categories = Category::all();
        $products = Product::orderByDesc('id')->paginate(10);
        return view('admin.productsManagement.list', compact('products','categories'));
    }
    public function createProForm(){
        $categories = Category::all();
        return view('admin.productsManagement.create',compact('categories'));
    }
    public function createPro(Request $request)
    {
        $data = $request->except('thumbnail');
        $data['thumbnail'] = "";
        if ($request->hasFile('thumbnail')) {
            $path_thumbnail = $request->file('thumbnail')->store('thumbnail');
            $data['thumbnail'] = $path_thumbnail;
        }
        //Create data
        Product::query()->create($data);
        return redirect()->route('admin.productsManagement.listProduct')->with('message', 'Thêm mới thành công');
    }
    //edit
    public function editPro(Product $product){
        $categories = Category::all();
        return view('admin.productsManagement.edit', compact('product','categories'));
    }
    public function updatePro(Request $request,Product $product){
        $data=$request->except('thumbnail');
        $old_thumbnail = $product->thumbnail;
        //khi k thay anh
        $data['thumbnail']= $old_thumbnail;
        //khi upload anh moi
        if($request->hasFile('thumbnail')){
            $path_thumbnail = $request->file('thumbnail')->store('thumbnail');
            $data['thumbnail']=$path_thumbnail;
        }
        //cap nhat du lieu\
        $product->update($data);
        //xoa file anh cu
        if($request->hasFile('thumbnail')){
        if(file_exists('storage/'.$old_thumbnail)){
            unlink('storage/'.$old_thumbnail);
        }
        return redirect()->route('admin.productsManagement.editPro', $product)->with('massage','Cập nhật thành công');

    }
    }
    //delete
    public function deletePro(Product $product){
            $product->delete();
            return redirect()->route('admin.productsManagement.listProduct')->with('error','Xóa thành công');

    }
    // detail
    public function showDetail(Product $product){
        // $proDetail = Product::find($id);
        // $thumbnail = $product->thumbnail;

        // if (!$product) {
        //     return redirect()->route('users.listPro')->with('error', 'Sản phẩm không tồn tại.');
        // }

        return view('users.products.detailProduct', compact('product'));
        }
    }


