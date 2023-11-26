<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(): View
    {
        return view('pages.home');
    }
    public function about(): View
    {
        return view('pages.about');
    }
    public function projects(): View
    {
        return view('pages.projects');
    }
    public function contact(): View
    {
        return view('pages.contact');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        return redirect('/');
    }
}
