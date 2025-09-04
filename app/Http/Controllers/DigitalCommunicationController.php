<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalCommunicationController extends Controller
{
    //index index_digital
    public function index_digital(){

        return view('front.sections.digital.index');
    }
}
