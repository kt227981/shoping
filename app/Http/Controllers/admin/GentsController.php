<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Gents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\returnValue;

class GentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = Gents::where('gender','=','male')->get();
        return view('admin.gents.show_boys',compact('value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gents.fields');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_size' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'product_description' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile("product_image")) {
            $img = $request->file("product_image");
            $img->store('public/admin/gents/image');
            $input['product_image'] = $img->hashName();
        }

        Gents::create($input);
        return redirect()->route('gents/show')->with(['success' => 'Data Send SuccessFully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $value = Gents::paginate(10);
        return  view('admin.gents.show',compact('value'));
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
        $data = Gents::find($id);
        if(Storage::delete('public/admin/gents/image/' . $data->product_image)) {
            $data->delete();
        }

        return redirect()->route('gents/show')->with(['unsuccess' => 'Data Delete SuccessFully']);
    }

    public function gents_clothes_destroy($id)
    {
        $data = Gents::find($id);
        if(Storage::delete('public/admin/gents/image/' . $data->product_image)) {
            $data->delete();
        }

        return redirect()->route('gents/clothes/show')->with(['success' => 'Data Delete SuccessFully']);
    }

    public function shoes_show(){
        $value = Gents::where('category', '=' , 'Shoes')->paginate(10);
        return view('admin.gents.show_shoes',compact('value'));
    }

    public function shoes_destroy($id)
    {
        $data = Gents::find($id);
        if(Storage::delete('public/admin/gents/image/' . $data->product_image)) {
            $data->delete();
        }

        return redirect()->route('shoes/show')->with(['success' => 'Data Delete SuccessFully']);
    }

    public function jacket_show(){
        $value = Gents::where('category','=','Jackets')->paginate(10);
        return view('admin.gents.show_jacket',compact('value'));
    }

    public function jacket_destroy($id)
    {
        $data = Gents::find($id);
        if(Storage::delete('public/admin/gents/image/' . $data->product_image)) {
            $data->delete();
        }

        return redirect()->route('shoes/show')->with(['success' => 'Data Delete SuccessFully']);
    }

    public function blazer_show(){
        $value= Gents::where('category','=','Blazers')->paginate(10);
        return view('admin.gents.show_blazer',compact('value'));
    }

    public function blazer_destroy($id)
    {
        $data = Gents::find($id);
        if(Storage::delete('public/admin/gents/image/' . $data->product_image)) {
            $data->delete();
        }

        return redirect()->route('blazer/show')->with(['success' => 'Data Delete SuccessFully']);
    }

    public function jumpsuit_show(){
        $value= Gents::where('category','=','Jumpsuits')->paginate(10);
        return view('admin.gents.show_jumpsuit',compact('value'));
    }

    public function jumpsuit_destroy($id)
    {
        $data = Gents::find($id);
        if(Storage::delete('public/admin/gents/image/' . $data->product_image)) {
            $data->delete();
        }

        return redirect()->route('jumpsuit/show')->with(['success' => 'Data Delete SuccessFully']);
    }

    public function sportswear_show(){

        $value = Gents::where('category', '=' , 'Sportswear')->paginate(10);
         return view('admin.gents.show_sportswear',compact('value'));
    }

    public function sportswear_destroy($id){
        $data = Gents::find($id);
        if(Storage::delete('public/admin/gents/image/' . $data->product_image)) {
            $data->delete();
        }

        return redirect()->route('sportswear/show')->with(['success' => 'Data Delete SuccessFully']);
    }








}

