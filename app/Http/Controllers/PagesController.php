<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index', [
            'title'     => 'Breakthrough your innovation with Breakpoint!'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title'     => 'About Us'
        ]);
    }

    public function project()
    {
        return view('project', [
            'title'     => 'Breakpoint Projects'
        ]);
    }

    public function package()
    {
        return view('package', [
            'title'     => 'Breakpoint Packages'
        ]);
    }

    public function article()
    {
        return view('errors.coming-soon');
    }
}
