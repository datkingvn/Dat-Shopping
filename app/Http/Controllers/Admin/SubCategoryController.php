<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function Index(){
        $allsubcategories = Subcategory::latest()->get();
        return view('admin.allsubcategory', compact('allsubcategories'));
    }

    public function AddSubCategory(){
        $categories = Category::latest()->get();
        return view('admin.addsubcategory', compact('categories'));
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:subcategories',
            'category_id' => 'required'
        ]);

        $category_id = $request->category_id; // Gán giá trị của "category_id" trong yêu cầu vào $category_id.

        // Tìm kiếm và lấy giá trị của trường "category_name" từ bảng "categories" dựa trên giá trị của biến $category_id.
        $category_name = Category::where('id', $category_id)->value('category_name');

        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
            'category_id' => $category_id,
            'category_name' => $category_name
        ]);

        Category::where('id', $category_id)->increment('product_count',1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Added Successfully!');
    }

    public function EditSubCat($id) {
        $subcatinfo = Subcategory::findOrFail($id); // sử dụng để tìm kiếm một bản ghi trong CSDL theo khóa chính

        return view('admin.editsubcategory', compact('subcatinfo'));
    }

    public function UpdateSubCat(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:subcategories'
        ]);

        $subcatid = $request->subcatid;

        Subcategory::findOrFail($subcatid)->update([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Updated Successfully!');
    }

    public function deletesubcat($id){
        $cat_id = Subcategory::where('id', $id)->value('category_id');

        Subcategory::findOrFail($id)->delete();

        Category::where('id', $cat_id)->decrement('subcategory_count',1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category Delete Successfully!');
    }
}
