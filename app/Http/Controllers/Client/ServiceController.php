<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Service $service)
    {
        return view('pages.service', [
            'service' => $service,
        ]);
    }
}
