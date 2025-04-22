<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function saveContent(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'content' => 'required',
    ]);
    
    // Here you would typically save to database
    // For example:
    // Content::create(['body' => $validated['content']]);
    
    // For testing, just redirect back with success message
    return back()->with('success', 'Content saved successfully!');
}
}
