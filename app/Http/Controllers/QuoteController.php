<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Validator;
class QuoteController extends Controller
{
    //
    public function index(){
        return view('quote');
    }
    public function store( Request $request){
        
        $validateErrors =   Validator::make($request->all(),
            [
                'name'=>'required|string:min:3|max:250',
                'email'=>'required|email|string:min:3|max:250',
                'phone'=>'required|digits:10',
                'job_type'=>'required|string:min:3|max:250',
                'budget'=>'required|string:min:3|max:250',
                'message'=>'required|string|min:3:max:4000',

            ]);
        if($validateErrors->fails()){
            return response()->json(['status'=>201,'message' => $validateErrors->errors()->first()]);
        } // end if fails .

        Quote::create([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "phone"=>$request->input("phone"),
            "job_type"=>$request->input("job_type"),
            "job_budget"=>$request->input("budget"),
            "details"=>$request->input("message"),

        ]);

       $message = "from: ".$request->input("name")."\n ,phone: ".$request->input("phone")."\r\n job type: ".$request->input("job_type")."\n ,budget: ".$request->input("budget")."\r\n details: ".$request->input("message");
        // Always set content-type when sending HTML email
        
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$request->input("email").'>' . "\r\n";
        
        mail("quote@ourpainting.com.au",$request->input("job_type"),$message,$headers);
        return response()->json(['status'=>200,'message' => 'Your Quote Registered Success']);
      
    }
}
