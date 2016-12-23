<?php

namespace App\Applications\Api\V1\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Core\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Applications\Api\Traits\Rest\ResponseHelpers;

class ProductController extends Controller
{
    use ResponseHelpers;

    public function addProduct(Request $request)
    {
        if(auth()->user()->token == $request->get('token')){
            $product = new \App\Domains\Product;
            $product->Category = $request->get('category');
            $product->ProductName = $request->get('productname');
            $product->ProductLink = $request->get('productlink');
            $product->ImageUrl = $request->get('imageurl');
            $product->UnitPrice = (float) $request->get('unitprice');
            $product->UnitSold = (int) $request->get('unitsold');
            $product->StartDate = $request->get('startdate');
            $product->EndDate = $request->get('enddate');
            $product->Revenue = (float) $request->get('revenue');
            $product->Company = $request->get('company');
            $product->Country = $request->get('country');
            $product->Status = $request->get('status');
            $product->merchant = $request->get('merchant');
            $product->last_fixed = (int) $request->get('last_fixed');

            $product->save();

            return $this->ApiResponse(compact('product'));
        } else {
            $message = "No token and auth for the user";

            return $this->ApiResponse(compact('message'));
        }
    }
}
