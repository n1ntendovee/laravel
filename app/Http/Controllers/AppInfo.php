<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppInfo extends Controller
{
    public function About() {
        return view('about');
    }
    public function Contacts(){
        return view('contacts');
    }
}
