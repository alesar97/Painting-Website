<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    //
    public function index(){
        return view("contact");
    }
    public function store( Request $request){
        $validateErrors =   Validator::make($request->all(),
            [
                'name'=>'required|string:min:3|max:250',
                'email'=>'required|email|string:min:3|max:250',
                'subject'=>'required|string:min:3|max:200',
                'message'=>'required|string|min:3:max:4000',

            ]);
        if($validateErrors->fails()){
            return response()->json(['status'=>201,'message' => $validateErrors->errors()->first()]);
        } // end if fails .

        ContactMessage::create([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "subject"=>$request->input("subject"),
            "message"=>$request->input("message"),

        ]);


       $message = "from: ".$request->input("name")."\n ,subject: ".$request->input("subject")."\r\n message: ".$request->input("message");
        // Always set content-type when sending HTML email
        
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$request->input("email").'>' . "\r\n";
        
        mail("info@ourpainting.com.au",$request->input("subject"),$message,$headers);
        return response()->json(['status'=>200,'message' => 'Your Quote Registered Success']);
    }
}


