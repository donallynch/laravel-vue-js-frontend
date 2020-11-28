<?php

namespace App\Http\Controllers;

use \App\Http\Services\ApiService;
use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /** @var ApiService $apiService */
    private $apiService;

    /**
     * IndexController constructor.
     * @param ApiService $apiService
     */
    public function __construct(
        ApiService $apiService
    ) {
        $this->apiService = $apiService;
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function beersAction(Request $request)
    {
        $data = $this->apiService
            ->beers()
            ->getData();

        /* Respond */
        return response()->json([
            'staus' => 200,
            'payload' => $data
        ], 200);
    }
}
