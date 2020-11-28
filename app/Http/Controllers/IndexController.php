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
//        $result = $this->breakInteger(10);
//
//
//        echo'<pre>';
//        var_dump($result);
//        echo'</pre>';
//        die('Died during code debug.');
        

        /* Render view */
        return view('index.index');
    }

    function power($x, $a)
    {
        $res = 1;
        while ($a)
        {
            if ($a & 1)
                $res = $res * $x;
            $x = $x * $x;
            $a >>= 1;
        }
        return $res;
    }

    function breakInteger($input)
    {
        //  base cases
        if ($input == 2){
            return 1;
        }

        if ($input == 3) {
            return 2;
        }

        $maxProduct=0;

        switch ($input % 3) {
            case 0:
                $maxProduct = $this->power(3, $input/3);
                break;
            case 1:
                $maxProduct = 2 * 2 * $this->power(3, ($input/3) - 1);
                break;
            case 2:
                $maxProduct = 2 * $this->power(3, $input/3);
                break;
        }
        return $maxProduct;
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
