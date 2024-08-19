<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductDetails;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class Dashboard extends Controller

{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    public function Index(Request $request){
        Session::put('data','welcome to Tuwaiq'); 
        Cookie::make('cookie','Here is my cookie',60);
        #$data = $request->User()->email;
        #dd($data);
        return view('Dashboard.index');
    }
    #public function getProduct(){
     #   return view('Dashboard.products');

    #}
    public function addProduct( Request $request){
        $product = Product::create([
            'productName' => $request -> productName
        ]);
        $product -> save();
        return redirect('dashboard/products');

    }
    public function readProducts(){
        $products = Product::all();
        return view('Dashboard.products',['products'=>$products]);

    }
    public function deleteProduct($id){
        $product = Product::find($id); # serach tha record that has the same id that i sent it when deleting comma here mean =

        $product->delete(); 
        return redirect('dashboard/products');
        }

        public function editProduct($id){
            $product = Product::find($id); # serach tha record that has the same id that i sent it when deleting comma here mean =
            return view('Dashboard.edit',['product'=>$product]);
            }
            public function update(Request $request){
                $product = Product::where('id',$request->id) -> update([ 
                'productName'=>$request->productName, 
               
            ]);
            return redirect('dashboard/products');
                
                
            }
            public function search(Request $request){
                $products = Product::where('productName',$request->name)->get(); 
                return view('Dashboard.products',['products'=>$products]);

            }
            public function test(){ 
                #$data = DB::table('Products')->get(); #
               # $data = DB::select('select * from products'); # we can also use SQL query like this 
                #$data = DB::table('Products')->where('productName','Iphone')->get(); #
                $data = DB::table('Products')->
                join('product_details','Products.id','=','product_details.productid')-> #this is a way for join meaning get imformation from more than one table
                get();
                return Response()->json($data);

            }
            public function logout(Request $request){
                Auth::logout();
                return redirect('/login');

            }
            public function productDetails(){
                $productDetails = DB::table('products')->join('product_details','products.id','=','product_details.productid')
                ->select('products.id','products.productName','product_details.color','product_details.price','product_details.qty','product_details.description')->get();
                #dd($productDetails);
                #$productDetails = ProductDetails::all();
                $products = Product::all();
                return view('Dashboard.productdetails',['productDetails'=>$productDetails,'products'=>$products]);
            }
            public function addProductDetails( Request $request){
                $validate = $request->validate([
                   'color' => 'required|max:5',
                   'price' =>'required||numeric',
                   'qty' => 'required'
                ]);
                $productDetails = ProductDetails::create([
                    'description' => $request -> desc,
                    'price'=>$request ->price,
                    'color'=>$request->color,
                    'qty'=>$request->quantity,
                    'productid'=>$request->produact,


                ]);
                $productDetails->save();
                return redirect('/productDetails'); 


        }


    


    }