<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::with(['employer', 'tags'])->where('title', 'LIKE', '%' . request('q') . '%');

        return view('results', ['jobs' => $jobs]);
    }
}
