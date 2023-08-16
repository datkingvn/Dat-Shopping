<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index(){
        // Lấy data "Category" trong CSDL bằng cách sử dụng hàm get().
        $categories = Category::latest()->get(); // Phương thức latest() để sắp xếp các bản ghi theo thứ tự mới nhất.
        return view('admin.allcategory', compact('categories')); // giúp tạo một mảng từ danh sách các biến đã cho
    }

    public function AddCategory(){
        return view('admin.addcategory');
    }

    public function StoreCategory (Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name)) // ex: Food -> food
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Added Successfully!');
    }

    public function EditCategory($id) {
        $category_info = Category::findOrFail($id); // sử dụng để tìm kiếm một bản ghi trong CSDL theo khóa chính

        return view('admin.editcategory', compact('category_info'));
    }

    public function UpdateCategory(Request $request){
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Updated Successfully!');
    }

    public function DeleteCategory($id) {
        Category::findOrFail($id)->delete();

        return redirect()->route('allcategory')->with('message', 'Category Deleted Successfully!');
    }
}
