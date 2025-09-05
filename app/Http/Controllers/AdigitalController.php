<?php

namespace App\Http\Controllers;

use App\Models\Adigital;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdigitalController extends Controller
{
    public function index()
    {
        return Inertia::render('adigital/Index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Adigital $adigital)
    {
        //
    }

    public function edit(Adigital $adigital)
    {
        //
    }

    public function update(Request $request, Adigital $adigital)
    {
        //
    }

    public function destroy(Adigital $adigital)
    {
        //
    }
}
