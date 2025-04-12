<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        $services = Service::all()
        ->groupBy('category'); // Sử dụng cột category trực tiếp

    $activeCategory = $request->query('category', null);
    $image = $request->query('image', 'service.jpeg');

    return view('pages.services', compact('services', 'activeCategory', 'image'));
    }
}
