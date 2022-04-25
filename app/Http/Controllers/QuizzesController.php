<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function index()
    {
        return Quiz::latest()->get();
    }
}
