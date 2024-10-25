<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
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

    public function add_product(){
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request){
        $data = new Products;
        $data->title = $request->p_title;
        $data->desc = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;
        $image = $request->p_image;
#request image from p_image
        if($image){
            $imagename = time().'.'. $image->getClientOriginalExtension();
            #menggunakan time agar nama gambar selalu berbeda
            $request->p_image->move('products', $imagename);

            $data->image = $imagename;
        }

        $data -> save();
        toastr()->closeButton()-> success('Produk telah Ditambahkan');
        return redirect()->back();
    }

    public function view_product(){

        $product_view = Products::paginate(3);
        return view ('admin.view_product', compact('product_view'));
    }

    public function delete_product($id){
        $item_saled = Products::find($id);
        $image_path=public_path('products/'.$item_saled->image);
        if(file_exists($image_path) && is_file($image_path)){
            unlink($image_path); // Hapus file gambar
        }

        $item_saled->delete();
        toastr()->closeButton()-> warning('Produk telah Dihapus');
        return redirect()->back();
    }

    public function search_product (Request $request){
        $searchproduct=$request->search;
        $product_view = Products::where('title', 'LIKE', '%'.$searchproduct.'%')->orWhere('category', 'LIKE', '%'.$searchproduct.'%')->paginate(3);
        return view('admin.view_product',compact('product_view'));
    }

}




