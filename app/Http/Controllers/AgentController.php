<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        // Add logic for agent dashboard
        return view('agent.dashboard');
    }
}
