<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $select_Products = new Products();
        // $all = $select_Products->all();
        $all = DB::table('products')->select('*')->orderBy('created_at', 'DESC')->get();
        return view('admin.home',compact('all'));
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

        // validate
        $validate = $request->validate([
            'img'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title'     => 'required|string|max:100|min:3',
            'content'   => 'required|string|max:255|min:3',
            'price'     => 'required|string|max:20|min:1',
            'type'      => 'required|string|max:30|min:1',
            ],

        $customMessages = [
            'img.required' => 'الرجاء تحديد صورة للمنتج',
            'img.mimes' => 'مسموح استخدام فقط للصور (jpeg,png,jpg,gif)',
            'required' => 'يحب كتابة الحقول كامله ',
            'title.max' => 'المسموح للعنوان من 3 حروف الى 100 حرف',
            'content.max' => 'المسموح للوصف من 3 حروف الى 255 حرف',
            'price.max' => 'المسموح للسعر من 1 حروف الى 30 حرف',
            'min' => 'المسموح من 3 حروف الى 100 حرف',
            ]
        );

        // $this->validate($request, $validate, $customMessages);
        // img extension to move
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $imageName);




        $Products = new Products();
        $Products->image = $imageName;
        $Products->title = $validate['title'];
        $Products->content = $validate['content'];
        $Products->price = $validate['price'] ;
        $Products->type = $validate['type'] ;
        $Products->save();




        return redirect()->back()->with('status',' تم انشاء المنتج ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Products = new Products();
        $Product = $Products->find($id);
        return view('admin.editProducts',compact('Product'));
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

        $update = Products::find($id);

        if ($request->img != Null) {

            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $update->image = $imageName;
        }
        $update->title = $request->input('title');
        $update->content = $request->input('content');
        $update->price = $request->input('price');
        $update->type = $request->input('type');
        $update->update();
        return redirect('/admin/Products')->with('status',' تم تعديل المنتج ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Products::find($id)->delete();
        return redirect()->back()->with('status_Red',' تم الحذف ');
    }
}
