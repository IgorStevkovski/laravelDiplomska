<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;
use Session;
use Auth;

use App\Http\Requests;

use Stripe\Charge;
use Stripe\Stripe;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getIndex(){
        //$products = Product::all();
        $products = Product::orderBy('id','asc')->paginate(10);//se zimaat prvite 5 produkti, drugite moze so link da gi zimame vo view-to
        //Session::forget('gender');//da se izbrise da ne se selektirani polinjata od filter select-ite.
        return view('shop.index', ['products'=>$products]);
    }

    public function getMens(){
        $products = Product::where('gender',1)->paginate(10);

        return view('shop.index', ['products'=>$products]);
    }

    public function getWomens(){
        $products = Product::where('gender', 2)->paginate(10);

        //Session::put('gender', 2);

        return view('shop.index', ['products'=>$products]);
    }

    public function getKids(){
        $products = Product::where('gender', 0)->paginate(10);

        //Session::put('gender', 0);

        return view('shop.index', ['products'=>$products]);
    }

    public function getBrandProducts($name){
        $products = Product::where('brandName', $name)->paginate(10);

        return view('shop.index', ['products'=>$products]);
    }

    public function getSortedProducts(){

        if(isset($_COOKIE['minPrice2'])){
            //echo $_COOKIE['minPrice2'];
        }
        if(isset($_COOKIE['maxPrice2'])){
            //echo $_COOKIE['maxPrice2'];
        }

        $by=Session::get('by');
        $order=Session::get('order');

        $brandCasio = "";
        if(Session::has('brandCasio')){
            $brandCasio = Session::get('brandCasio');
        }
        $brandEsprit = "";
        if(Session::has('brandEsprit')){
            $brandEsprit = Session::get('brandEsprit');
        }
        $brandFossil = "";
        if(Session::has('brandFossil')){
            $brandFossil = Session::get('brandFossil');
        }
        $priceTo = 1000;
        if(Session::has('priceTo')){
            $priceTo = Session::get('priceTo');
        }
        $priceFrom = 0;
        if(Session::has('priceFrom')){
            $priceFrom = Session::get('priceFrom');
        }
        $gender = "%";
        if(Session::has('gender')){
            $gender = Session::get('gender');
        }

        if($brandFossil=="" && $brandEsprit=="" && $brandCasio=="")//ako ne e stiklirano nisto - daj gi site produkti
        {
            $products = Product::where([ ['price','<',$priceTo],['price','>',$priceFrom],
                ['brandName','like',"%"],['gender','like',$gender]
            ])->orderBy($by,$order)->paginate(10);

            return view('shop.sort', ['products'=>$products]);
        }
        else if($by != null && $order != null){ //ustvari ako e stiklirano - daj samo od stikliranite produkti
            //$products = Product::orderBy($by, $order)->paginate(2);//se zimaat prvite 5 produkti, drugite moze so link da gi zimame vo view-to
            $products=Product::where(function($query) use ($brandCasio,$brandEsprit,$brandFossil){
                $query->where('brandName','LIKE',$brandCasio)
                    ->orWhere('brandName','LIKE',$brandEsprit)
                    ->orWhere('brandName','LIKE',$brandFossil);
            })->where(function($query) use($priceTo,$priceFrom,$gender){
                $query->where('price','<',$priceTo)
                    ->where('price','>',$priceFrom)
                    ->where('gender','LIKE',$gender);
            })->orderBy($by, $order)
                ->paginate(10);

            return view('shop.sort', ['products'=>$products]);
        }
        //u slucaj da istekla sesijata i se izgubile promenlivite t.e se NULL, vrakjame produkti podredeni difoltno
        else{
            $products = Product::orderBy('id','asc')->paginate(10);
            return view('shop.sort', ['products'=>$products]);
        }

    }

    public function postSortedProducts(Request $request){

        //za sort sto e odbrano
        $value = $request['sortOptions'];
        $values = explode(" ",$value);
        $by=$values[0];
        $order=$values[1];
        Session::put('by',$by);
        Session::put('order',$order);

        //za price sto e odbrano
        //$priceFrom = $request['priceFrom'];
        //$priceTo = $request['priceTo'];
        $priceFrom = $request['txtMinPrice'];
        $priceTo = $request['txtMaxPrice'];

        //Cookies za slider-ot vrednostite
//        Cookie::queue('minPrice',$priceFrom, 60);
//        Cookie::queue('maxPrice',$priceTo, 60);
        setcookie("minPrice2",$priceFrom,time()+3600);//za kolaceto se pristapi od javascript, posto sesijata ne moze
        setcookie("maxPrice2",$priceTo,time()+3600);

//        $value = Cookie::get('minPrice');
//        if($value == 0){
//            redirect()->route('product.index');
//        }

        //za brand sto e odbrano
        //$brand = $request['brandOptions'];

        $brandCasio = "";
        if($request['casio'] == "Casio"){
            $brandCasio = $request['casio'];
        }
        $brandEsprit = "";
        if($request['esprit'] == "Esprit"){
            $brandEsprit = $request['esprit'];
        }
        $brandFossil = "";
        if($request['fossil'] == "Fossil"){
            $brandFossil = $request['fossil'];
        }

        //za gender sto e odbrano
        $gender = $request['genderOptions'];

        //Vo sesija gi cuvame filter opciite za da posle prikazeme po sto filtrirame
        if($request['sortOptions']=="price asc"){
            Session::put('sortOptions','Price: Lower to Higher');
        }
        elseif($request['sortOptions']=="price dsc"){
            Session::put('sortOptions','Price: Higher to Lower');
        }
        elseif($request['sortOptions']=="id asc"){
            Session::put('sortOptions','Oldest First');
        }
        elseif($request['sortOptions']=="id dsc"){
            Session::put('sortOptions','Newest First');
        }

        Session::put('priceFrom', $priceFrom);
        Session::put('priceTo', $priceTo);

//        if($request['brandOptions']=="%"){
//            Session::put('brandName','All Brands');
//        }
//        else
//            Session::put('brandName',$request['brandOptions']);

        Session::forget('brandCasio');
        Session::forget('brandEsprit');
        Session::forget('brandFossil');

        if($brandCasio == "Casio"){
            Session::put('brandCasio', $brandCasio);
        }
        if($brandEsprit == "Esprit"){
            Session::put('brandEsprit', $brandEsprit);
        }
        if($brandFossil == "Fossil"){
            Session::put('brandFossil', $brandFossil);
        }

        if($request['genderOptions']=="%"){
            Session::put('gender','%');
        }
        else
            Session::put('gender',$request['genderOptions']);

        return redirect()->route('product.getSortedProducts');

        if($brandFossil=="" && $brandEsprit=="" && $brandCasio=="")
        {
            $products = Product::where([ ['price','<',$priceTo],['price','>',$priceFrom],
                ['brandName','like',"%"],['gender','like',$gender]
            ])->orderBy($by,$order)->get();
        }
        else{
            $products=Product::where(function($query) use ($brandCasio,$brandEsprit,$brandFossil){
                $query->where('brandName','LIKE',$brandCasio)
                    ->orWhere('brandName','LIKE',$brandEsprit)
                    ->orWhere('brandName','LIKE',$brandFossil);
            })->where(function($query) use($priceTo,$priceFrom,$gender){
                $query->where('price','<',$priceTo)
                    ->where('price','>',$priceFrom)
                    ->where('gender','LIKE',$gender);
            })->orderBy($by, $order)->get()
                ;
        }
        //$products = Product::orderBy($by, $order)->paginate(5);//se zimaat prvite 5 produkti, drugite moze so link da gi zimame vo view-to
        return view('shop.sort', ['products'=>$products]);
    }



    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);

        return redirect()->route('product.index');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        if(! Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

    public function getCheckout(){
        if(! Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout',['total'=>$total]);
    }

    public function postCheckout(Request $request){
        if(! Session::has('cart')){
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_TAOr2UnP4bNLSYSlJt6q0enn');
        try{
            $charge = Charge::create(array(
                    "amount" => $cart->totalPrice * 100,
                    "currency" => "usd",
                    "source" => $request->input('stripeToken'), // obtained with Stripe.js..prethodno dodadeno vo formata
                    //od koja se prakja preku javascript konekcija so stripe serverot
                    "description" => "Test Charge"
                )
            );

            $order = new Order();
            $order->cart = serialize($cart); //php fja koja go pretvara vo string $cart objektot
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id; //payment_id vrateno od stripe serverot
            $order->data = Carbon::now();

            Auth::user()->orders()->save($order);//zacuvuvanje vo baza na order-ot pod id na tekovnonajaveniot juzer
        }catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('product.index')->with('success','Successfully purchased products!');
    }

    public function getOneProduct($id){
        $product = Product::find($id);
        if($product != null)
            return view('shop.oneProduct',['product'=>$product]);
        else
            return view('errors.404');//vo slucaj da se napise namerno vo linkot id koe go nema vo baza
    }
}
