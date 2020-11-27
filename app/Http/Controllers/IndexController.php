<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct() {

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexAction(Request $request)
    {
        /* Render view */
        return view('index.index');
    }
}
