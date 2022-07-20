<?php

namespace App\Http\Controllers;

use App\Models\ProjectTimeline;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = ProjectTimeline::all();

        return view('project.index', compact('data'));
    }
}
