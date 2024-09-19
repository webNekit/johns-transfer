<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CooperationController extends Controller
{
    public function index()
    {
        return view('pages.cooperation', [
            'title' => 'Сотрудничество',
        ]);
    }
}
