<?php

namespace TecnoComputadoras\Http\Controllers\Blog;

use Illuminate\Http\Request;

use TecnoComputadoras\Http\Requests;
use TecnoComputadoras\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('blog.home');
    }
}
