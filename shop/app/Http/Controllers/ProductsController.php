<?php

namespace App\Http\Controllers;

use App\Models\addProduct;
use App\Models\Coment;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // pages
    public function Headphones(){
        $Producer = DB::table('products')->select('*')->where('type' , 'Headphones')->orderBy('created_at', 'DESC')->get();
        return view('Products.Headphones', compact('Producer'));
    }

    public function keyboards(){
        $Producer = DB::table('products')->select('*')->where('type' , 'keyboards')->orderBy('created_at', 'DESC')->get();
        return view('Products.keyboard', compact('Producer'));
    }

    public function Mouse(){
        $Producer = DB::table('products')->select('*')->where('type' , 'Mouse')->orderBy('created_at', 'DESC')->get();
        return view('Products.Mouse', compact('Producer'));
    }

    public function Mics(){
        $Producer = DB::table('products')->select('*')->where('type' , 'Mics')->orderBy('created_at', 'DESC')->get();
        return view('Products.Mics', compact('Producer'));
    }

    public function index()
    {
        return 'test index ';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {

        if (Auth::check() == true) {

            $user_id = Auth::user()->id;
            $product_id = $id;


            $check = addProduct::where([ 'product_id' => $product_id, 'user_id' => $user_id ])->first();
            if ($check == null) {

                $add = new addProduct();
                $add->user_id = $user_id;
                $add->product_id = $product_id;
                $add->save();
                return redirect()->back()->with('status',' تم اضافة المنتج  ');
            }else{
                return redirect()->back()->with('status',' المنتج مضاف مسبقا ');
            }


        }else{
            return redirect('/login');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $all = DB::table('products')->select('*')->where('id' , $id)->orderBy('created_at', 'DESC')->get();
        $coments = DB::table('coments')->select('*')->where('product_id' , $id)->orderBy('created_at', 'DESC')->get();
        return view('Products.show', compact('all','coments'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
