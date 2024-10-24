<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_cat (){
        $category_data= Category::all();

        return view('admin.category', compact('category_data'));
    }

    public function add_category(Request $request){

        $request->validate([
            'category' => 'required|string|max:255',
        ]);


        $category = new Category;
        $category -> category_name = $request->category;
        $category->save();
        toastr()->closeButton()->success('Kategori telah Ditambahkan');
        return redirect()->back();
    }

    public function delete_category($id){
        $category_id = Category::find($id);
        $category_id->delete();
        return redirect()->back();
    }

    public function edit_category($id){
        $category_id = Category::find($id);
        return view('admin.edit_category', compact('category_id'));
    }

    public function change_category (Request $request, $id){
        $category_data = Category::find($id);
        $category_data -> category_name = $request->category;
        $category_data -> save();
        toastr()->closeButton()->info('Kategori telah Diubah');
        return redirect()->back();
        return redirect ('/view_cat');
    }


}

