<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getAdminProducts(){
        $products = Product::orderBy('id','asc')->paginate(10);
        return view('admin.products', ['products'=>$products]);
    }

    public function getDeleteAdminProduct($id){
        $product=Product::find($id);
        $product->delete();

        return redirect()->route('admin.getProducts');
    }

    public function getEditAdminProduct($id){
        $product = Product::find($id);
        return view('admin.editProduct',['product'=>$product]);
    }

    public function postEditAdminProduct(Request $request, $id){

        $product = Product::find($id);

        //Ako e praten fajl t.e slika da se zacuva na server
        if($request->hasFile('file')){
            $file = $request->file('file');
            $destination_path = 'images/';
            $filename = $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $product->imageUrl = $destination_path . $filename;
        }

        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->description = $request['description'];
        $product->gender = $request['gender'];
        $product->brandName = $request['brandName'];

        $product->save();
        return redirect()->route('admin.getProducts');
    }

    public function getAddProduct(){
        return view('admin.addProduct');
    }

    public function postAddProduct(Request $request){
        $product = new Product();

        if($request->hasFile('file')){
            $file = $request->file('file');
            $destination_path = 'images/';
            $filename = $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $product->imageUrl = $destination_path . $filename;
        }
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->description = $request['description'];
        $product->gender = $request['gender'];
        $product->brandName = $request['brandName'];

        $product->save();
        return redirect()->route('admin.getProducts');
    }
}
