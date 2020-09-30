<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class HomeController extends Controller
{
    private $shop;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        $this->middleware('auth');
        $this->shop = $shop;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
