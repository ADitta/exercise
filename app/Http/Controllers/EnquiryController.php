<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryRequest;
use App\Mail\ProductEnquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(EnquiryRequest $request)
    {
        return new ProductEnquiry($request->validated());
    }
}
