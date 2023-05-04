<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        // return 'Index';
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello From Taufique!'
            ]
        );
    }

    public function show(){
        return inertia('Index/Show');
    }
}