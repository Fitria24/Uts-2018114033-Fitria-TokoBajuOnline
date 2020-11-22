<?php

namespace App\Http\Controllers;
use App\Models\Gambarproduk;
use Illuminate\Http\Request;

class GambarprodukController extends Controller
{
    public function index()
        {
         return view('gambarproduk.index');
        }
    }
    