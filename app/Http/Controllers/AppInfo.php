<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppInfo extends Controller
{
    public function About() {
        return view('about');
    }

    public function Contacts () {
        return view('contacts', [
            'name' => 'n1n',
            'mail' => 'nazar.kozak.3010@gmail.com',
            'phone' => '546145463'
        ]);
    }
}
