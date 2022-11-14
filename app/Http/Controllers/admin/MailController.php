<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use App\Mail\UserEmail;
use App\Models\admin\Mail;
use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class MailController extends Controller
{

    public function edit($id){
        $mail = Mail::find($id);
        return view('admin.mail.fields',compact('mail'));
    }


    public function store(Request $request){
        $input = $request->all();
        Mail::create($input);

        return redirect()->back()->with(['success' => 'Mail Send Successfully']);
    }


    public function show(){
        $mail = Mail::all();
        return view('admin.mail.mail',compact('mail'));
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();
        $data = Mail::find($id);
        $data['check'] = 'Yes';
        $data->update($input);
        \Illuminate\Support\Facades\Mail::to($input['email'])->send(new TestMail($input));

        return redirect()->route('mail.show')->with(['success' => 'Reply Message Successfully Send..']);
    }



}
