<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Http;

//use App\Models\Product;
//use Validator;
//use App\Http\Resources\ProductResource;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://api.punkapi.com/v2/beers?abv_gt=3');

        return $this->sendResponse($response->json(), 'Product retrieved successfully.');
    }
}
