<?php

namespace App\Http\Controllers\front;
use Exception;
use App\model\front\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function store(Request $request)
    {


        try{
        $input=Input::all();
        $rules=[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:11|max:12',
            'message'=>'required'
        ];

        $customMessages = [
            'required' => 'The :attribute field can not be blank.'
        ];


        $validator = Validator::make($input, $rules, $customMessages);
        if ($validator->Fails()) {
            $message = $validator->errors();

            return redirect()->back()->withErrors($message)->withInput();
        } else {
            $data = Contact::create($request->all());

            $data->save();

            return redirect()->route('main')
                ->with('success', 'Message sent successfully');
        }
         }catch (\Exception $e) {
             return back()->with('success','Message not sent! try again');
         }



    }
}
