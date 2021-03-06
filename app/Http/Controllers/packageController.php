<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class packageController extends Controller
{
    public function index(){
        $packages = Package::all();
        return view('home', compact('packages'));

    }
    public function show($id){
        $package = Package::findOrFail($id);
        return view('details', compact('package'));


    }
}
