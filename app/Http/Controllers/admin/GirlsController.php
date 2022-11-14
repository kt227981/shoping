<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Gents;
use App\Models\admin\Girls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GirlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $value = Gents::where('gender', '=' , 'female')->get();
        return view('admin.girls.show', compact('value'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $data = Gents::find($id);
            if (Storage::delete('public/admin/gents/image/' . $data->product_image)) {
                $data->delete();
            }

            return redirect()->route('girls/show')->with(['success' => 'Data Delete SuccessFully']);
    }

    public function child_show(){
        $child = Gents::where('gender', '=' , 'child')->get();
        return view('admin.girls.child', compact('child'));
    }

public function child_destroy($id)
{

    $data = Gents::find($id);
    if (Storage::delete('public/admin/gents/image/' . $data->product_image)) {
        $data->delete();
    }

    return redirect()->route('child/show')->with(['success' => 'Data Delete SuccessFully']);

}

}
