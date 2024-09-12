<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {
        // Ottieni la data odierna
        $today = Carbon::today();

        // Recupera tutti i treni in partenza dalla data odierna
        $trains = Train::whereDate('departure_date', '=', $today)->get();

        return view('home', compact('trains'));
    }
    public function about()
    {
        return view('about');
    }
    public function contacts()
    {
        return view('contacts');
    }
}
