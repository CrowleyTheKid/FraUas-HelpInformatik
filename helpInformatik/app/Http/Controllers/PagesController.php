<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;



class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'FraUas-HelpInformatik'
        ]);
    }
    public function page($page)
    {
        // dieses if später in einen service bzw die Laravel bezeichnung
        // auslagern
        if (!(\view()->exists('pages.'.$page))){
            return redirect()->route('home');
        }

        return view('pages.'.$page, [
            'title' => ucfirst($page)
        ]);
    }
}
