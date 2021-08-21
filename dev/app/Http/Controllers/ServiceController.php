<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        
        if($request->ajax())
        {
            return Service::orderBy('id','DESC')->get();
        }else{
            return view('services');
        }
    }
    public function store(Request $request)
    {
        $service = Service::create($request->all());
        return $service;
    }

    public function editStatus($id)
    {
        $service = Service::findOrFail($id);
        $service->status = true;
        $service->save();

        return $service;
    }

    public function serviceView($id)
    {
        return view('show_detail',);
    }

    public function serviceData($id)
    {
        $service = Service::findOrFail($id);
        return  $service ;
    }
}
