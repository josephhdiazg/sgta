<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ClientVehicleController extends Controller
{
    public function index(Client $client)
    {
        return inertia('Clients/Vehicles/Index', [
            'vehicles' => $client->vehicles,
        ]);
    }

    public function show(Vehicle $vehicle)
    {
        return inertia('Clients/Vehicles/Show', [
            'vehicle' => $vehicle,
        ]);
    }
}
