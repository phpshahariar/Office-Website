<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(){
        $categories = Category::all();
        return view('backend.category.add-category', compact('categories'));
    }

    public function save_category(Request $request){
        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->publication_status = $request->publication_status;
        $categories->save();
        return redirect()->back()->with('message', 'Category Save Successfully');
    }

    public function published_category($id){
        $published_category = Category::find($id);
        $published_category->publication_status =0;
        $published_category->save();
        return redirect()->back()->with('message', 'Category Unpublished');
    }

    public function unpublished_category($id){
        $published_category = Category::find($id);
        $published_category->publication_status =1;
        $published_category->save();
        return redirect()->back()->with('message', 'Category Published');
    }

    public function edit_category($id){
        $edit_category = Category::find($id);
        return view('backend.category.edit-category', compact('edit_category'));
    }

    public function update_category(Request $request){
        $update_category = Category::find($request->category_id);
        $update_category->category_name = $request->category_name;
        $update_category->publication_status = $request->publication_status;
        $update_category->save();
        return redirect('/category')->with('message', 'Category Update Successfully');
    }

    public function delete_category($id){
        $delete_category = Category::find($id);
        $delete_category->delete();
        return redirect()->back()->with('delete', 'Category Deleted');
    }
}
