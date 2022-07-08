<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
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
        $Headphones = DB::table('products')->select('*')->where('type' , 'Headphones')->orderBy('created_at', 'DESC')->get();
        return view('Products.Headphones', compact('Headphones'));
    }

    public function keyboards(){
        $keyboard = DB::table('products')->select('*')->where('type' , 'keyboards')->orderBy('created_at', 'DESC')->get();
        return view('Products.keyboard', compact('keyboard'));
    }

    public function Mouse(){
        $Mouse = DB::table('products')->select('*')->where('type' , 'Mouse')->orderBy('created_at', 'DESC')->get();
        return view('Products.Mouse', compact('Mouse'));
    }

    public function Mics(){
        $Mics = DB::table('products')->select('*')->where('type' , 'Mics')->orderBy('created_at', 'DESC')->get();
        return view('Products.Mics', compact('Mics'));
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
    public function store(Request $request)
    {
        //
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
        return view('Products.show', compact('all'));
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
