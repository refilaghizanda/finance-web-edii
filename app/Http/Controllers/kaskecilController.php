<?php

namespace App\Http\Controllers;

use App\Models\kaskecil;
use Illuminate\Http\Request;

class kaskecilController extends Controller
{
    public function index () {

        $data = kaskecil::get();

        return view ('kas-kecil', compact('data'));
    }
}
