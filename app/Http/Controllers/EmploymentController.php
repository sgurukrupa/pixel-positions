<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use App\Models\Tag;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function index()
    {
        return view('home', [
            'employments' => Employment::all(),
            'tags' => Tag::all()
        ]);
    }
}
