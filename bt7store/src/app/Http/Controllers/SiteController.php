<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SiteController extends Controller
{
    /**
     * Apresenta a página Home.
     */
    public function home(Request $request): View
    {
        return view('site.home');
    }
    
    /**
     * Apresenta a página Home.
     */
    public function catalogo(Request $request): View
    {
        return view('site.catalogo');
    }
    
    /**
     * Apresenta a página Home.
     */
    public function encomendar(Request $request): View
    {
        return view('site.encomendar');
    }
    
    /**
     * Apresenta a página Home.
     */
    public function contactos(Request $request): View
    {
        return view('site.contactos');
    }
}
