<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    public function index()
    {
        $arrayTrains = Train::where("data_di_partenza", "=", Train::raw("curdate()"))->get();
        return view("home", compact("arrayTrains"));
    }
}
