<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function listCate(Category $categories)
    {
        $categories = Category::all();
        return view('admin.categoriesManagement.listCate', compact('categories'));
    }

    //form
    public function createCateForm()
    {
        return view('admin.categoriesManagement.createCate');
    }
    //create
    public function createCate(Request $request)
    {
        $data = $request->all();
        Category::query()->create($data);
        return redirect()->route('admin.categoriesManagement.listCate')->with('message','Thêm mới danh mục thành công');
    }
    //delete
    public function deleteCate(Category $cate){
            $cate->delete();
            return redirect()->route('admin.categoriesManagement.listCate')->with('error','Xóa thành công');
    }
    //edit
    public function editCate(Category $cate)
    {
        return view('admin.categoriesManagement.editCate', compact('cate'));
    }
    //update
    public function updateCate(Request $request, Category $cate)
    {
       $cate->update($request->all());
        return redirect()->route('admin.categoriesManagement.editCate', $cate)->with('message', 'Cập nhật thành công');
    }


}
