<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\FlashMessages;

class HomeController extends Controller
{
    //https://www.larashout.com/base-controller-and-repository
    use FlashMessages;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
