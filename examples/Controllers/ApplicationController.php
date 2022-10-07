<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $applications = ApplicationModel::query()
            ->filter(new ApplicationFilter($request))
            ->sort(new ApplicationSort($request))
            ->paginate(10);
        
        return response()->json($applications);
    }
}