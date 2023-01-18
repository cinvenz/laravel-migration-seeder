<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class HomeController extends Controller
{
    public function home()
    {
        return view('guest.home');
    }

    public function list()
    {
        $trains = Train::all();
        // dd($movies);
        return view('guest.list', compact('trains'));
    }
}
