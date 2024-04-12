<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitors = Visitor::all();
        return view('visitors', compact('visitors'));
    }

    public function show(Visitor $visitor)
    {
        return view('show_visitor', compact('visitor'));
    }

    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
        return redirect()->route('visitors');
    }
}
