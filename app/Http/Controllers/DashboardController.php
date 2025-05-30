<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (request()->user()->client) {
            request()->user()->client->load('vehicles');
        }

        return inertia('Dashboard', [
            'vehicles' => request()->user()->client?->vehicles ?? [],
        ]);
    }
}
