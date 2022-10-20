<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index(){
        $services = Service::all();
        return view('services',compact('services'));
    }
    public function details($id){
        $services = Service::find($id);
        $all = Service::all(["id","name"]);
        if(empty($services))
            abort(404);
        return view('service_details',compact('services','all'));
    }
}
