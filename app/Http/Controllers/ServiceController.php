<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all()->groupBy('category');
        
        return view('pages.services', compact('services'));
    }
}
