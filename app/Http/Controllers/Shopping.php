<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\HTTP;


class Shopping extends Controller
{
    public function showListItemPhones(Request $request){ 
        $data = DB::table('products')->join('product_details','products.id','=','product_details.productid')->get(); #قرأتهم مشان حطهم بالكارت
        $tax = 0.15;
        $discount=10; 
        foreach ($data as $key =>$value){
            $data[$key]->total = ($data[$key]->price*$tax)+$data[$key]->price; 
            $data[$key]->discount = $discount;
            $data[$key]->Net = $data[$key]->total -  $data[$key]->discount;
            $data[$key]->tax=$tax;
        }

        return view('shopping.list-items',['data'=>$data]);

    }
    public function showDetails($id){ 
        $data = DB::table('products')
        ->join('product_details','products.id','=','product_details.productid')
        ->where('product_details.productid','=',$id)
        ->first(); 
        $tax = 0.15;
        $discount=10;
        $data->total = ($data->price*$tax)+$data->price; 
            $data->discount = $discount;
            $data->Net = $data->total -  $data->discount;
            $data->tax=$tax;

        return view('shopping.details',['data'=>$data]);
        

    }
    public function addToCart(Request $request,$id){ 

        $userid = $request->user()->id; # get current user id 
        $data = DB::table('products')
        ->join('product_details','products.id','=','product_details.productid')
        ->where('product_details.productid','=',$id)
        ->first();            

        $tax = 0.15;
        $discount=10;
        $data->total = ($data->price*$tax)+$data->price;
            $data->discount = $discount;
            $data->Net = $data->total -  $data->discount;
            $data->tax=$tax;

        $row = [
            'productid'=>$data->id,
            'price'=>$data->price,
            'qty'=>$data->qty,
            'tax'=> $data->tax,
            'total'=>$data->total,
            'discount'=>$data->discount,
            'net'=> $data->Net,
            'userid'=>$userid
        ];
        DB::table('carts')->insert($row);
        $count = DB::table('carts')->where('userid','=',$userid)->count();
        Session::put('count',$count); 
    }
    public function getHotCoffee(){
        $response=HTTP::get('https://api.sampleapis.com/coffee/hot'); 
        
        # dd($response->body());
        
        #return Response()->json([
         #   'response'=>$response->body()
         #]);

        #return Response()->json([
         #   'response'=>$response->object()
         #]);
         
         $data = $response->object();
         return view('shopping.coffee',['data'=>$data]); 


    }
    public function getUsersApi(){
        $apiURL='https://jsonplaceholder.typicode.com/users';

        $headers = [ 
            'Content-Type'=>'application/json',

        ];
        $response =  $response=HTTP::withHeaders($headers)->get($apiURL,[
            'email'=>'Sincere@april.biz', 
        ]);
        $data =   $response->json();
        dd($data);

    }
    public function getSportsApi(){
    $apiUrl='https://v1.baseball.api-sports.io/status';
    $headers = [
    'Content-Type'=>'application/json',
    'x-Rapidapi-key'=>'24c939c2ba293c859d5ecd476932d293'  
    ];
    $response =  $response=HTTP::withHeaders($headers)->get($apiUrl);
    $data= $response->json(); 
    return Response()->json($data);

    }
    public function cart(){
        $data = DB::table('carts')->join('product_details','carts.productid','=','product_details.productid')
        ->join('products', 'carts.productid', '=', 'products.id')
        ->get(); 
        $totalPrice = DB::table('carts')->sum('net');
        return view('shopping.showCartItem',['data'=>$data],['totalPrice'=>$totalPrice]);
    }
}
