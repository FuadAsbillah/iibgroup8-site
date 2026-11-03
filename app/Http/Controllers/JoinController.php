<?php

namespace App\Http\Controllers;

use App\Models\JoinApplication;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function create()
    {
        return view('join');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'car_model' => 'nullable|string|max:255',
            'reason' => 'required|string|max:2000',
        ]);

        JoinApplication::create($validated);

        return redirect('/join')->with(
            'success',
            'Your membership application has been submitted successfully!'
        );
    }
}
