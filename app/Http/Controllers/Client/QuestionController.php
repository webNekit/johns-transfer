<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('pages.question', [
            'title' => "Вопрос-ответ"
        ]);
    }
}
