<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    
    public function form_ch()
    
    {
        return view('Inscription');
    }

}
