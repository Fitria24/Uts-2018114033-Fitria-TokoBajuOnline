<?php

namespace App\Http\Controllers;
use App\Models\Homes;
use Illuminate\Http\Request;

class HomesController extends Controller
{
public function index()
    {
     return view('homes.index');
    }
}
