<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\OrderService;
use Illuminate\Http\Request;

class OrderServiceController extends Controller
{
    public function index(OrderService $orderService)
    {
        return view('pages.order-service', [
            'service' => $orderService,
        ]);
    }
}
