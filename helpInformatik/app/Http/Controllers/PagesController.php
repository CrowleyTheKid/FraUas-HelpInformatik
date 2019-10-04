<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Fra Uas HelpInformatik'
        ]);
    }
    public function page($page)
    {

        return view('pages.'.$page, [
            'title' => ucfirst($page)
        ]);
    }
}
