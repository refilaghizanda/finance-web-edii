<?php

namespace App\Http\Controllers;

use App\Models\kasbesar;
use Illuminate\Http\Request;

class kasbesarController extends Controller
{
    public function index () {

        $data = kasbesar::get();

        return view ('kas-besar', compact('data'));
    }
}
