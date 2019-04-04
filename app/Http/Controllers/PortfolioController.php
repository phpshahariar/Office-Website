<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Logo;
use App\Product;
use Illuminate\Http\Request;
use Image;
class PortfolioController extends Controller
{
    public function index_portfolio(){
        $logos = Logo::where('publication_status', 1)->get();
        $categories = Category::where('publication_status', 1)->get();
        $contact_us = Contact::where('publication_status', 1)->get();
        $products = Product::where('publication_status', 1)
                            ->orderBy('id', 'desc')
                            ->paginate(9);
        return view('frontend.portfolio.portfolio', compact('categories', 'products', 'logos', 'contact_us'));
    }

    public function category_product($id){
        $logos = Logo::where('publication_status', 1)->get();
        $categories = Category::where('publication_status', 1)->get();
        $contact_us = Contact::where('publication_status', 1)->get();
        $products = Product::where('category_id', $id)
                            ->orderBy('id', 'desc')
                            ->paginate(9);
        return view('frontend.portfolio.portfolio-product', compact('categories', 'products', 'logos', 'contact_us'));
    }


//    backend work

    public  function index_product(){
        $categories = Category::where('publication_status', 1)->get();
        $products = Product::get();
        return view('backend.product.category-product', compact('categories', 'products'));
    }

    public function save_product(Request $request){
        $add_product = new Product();
        if ($request->hasFile('category_img')){
            $productImage = $request->file('category_img');
            $imageName = $productImage->getClientOriginalName();
            $fileName = time().'_product_'.$imageName;
            $directory = public_path('/product-images/');
            $productImgUrl = $directory.$fileName;
            Image::make($productImage)->resize(350, 350)->save($productImgUrl);
            $add_product->category_img = $fileName;
        }
        $add_product->category_id  = $request->category_id;
        $add_product->product_name  = $request->product_name;
        $add_product->details  = $request->details;
        $add_product->publication_status  = $request->publication_status;
        $add_product->save();
        return redirect()->back()->with('message', 'Product Save Successfully');
    }

    public function published_product($id){
        $published_product = Product::find($id);
        $published_product->publication_status = 0;
        $published_product->save();
        return redirect()->back()->with('message', 'Product Unpublished');
    }

    public function unpublished_product($id){
        $unpublished_product = Product::find($id);
        $unpublished_product->publication_status = 1;
        $unpublished_product->save();
        return redirect()->back()->with('message', 'Product Published');
    }

    public function edit_product($id){
        $edit_product = Product::find($id);
        $categories = Category::get();
        return view('backend.product.edit-product', compact('edit_product', 'categories'));
    }

    public function update_product(Request $request){
        $update_product = Product::find($request->id);

        if ($request->hasFile('category_img')){
            if ($request->category_img){
                unlink(public_path('/product-images/'.$update_product->category_img));
            }
        }
        if ($request->hasFile('category_img')){
            $product = $request->file('category_img');
            $product_name = $product->getClientOriginalName();
            $filename = time().'_product_'.$product_name;
            $directory = public_path('/product-images/');
            $productUrl = $directory.$filename;
            Image::make($product)->resize(300, 300)->save($productUrl);
            $update_product->category_img = $filename;
        }
        $update_product->category_id  = $request->category_id;
        $update_product->product_name  = $request->product_name;
        $update_product->details  = $request->details;
        $update_product->publication_status = $request->publication_status;
        $update_product->save();
        return redirect('/product')->with('message', 'Product Update Successfully');
    }

    public function delete_product($id){
        $delete_product = Product::find($id);
        $delete_product->delete();
        return redirect()->back()->with('message', 'Product Deleted');
    }


//    Product Details
    public function details_product($id){
        $logos = Logo::where('publication_status', 1)->get();
        $details = Product::find($id);
       return view('frontend.product-details.details-product', compact('details', 'logos'));
    }


}
