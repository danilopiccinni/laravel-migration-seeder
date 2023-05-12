<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all()->where(('orario_di_partenza'), '>' , now());
        return view('home', compact('trains'));
    }
}
