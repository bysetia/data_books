<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        return view ('publisher.all', [
            'publishers' => Publisher::all()
        ]);
    }

    public function show(Publisher $publisher)
    {
        return view('publisher.detail', [
            'public' => $publisher,
        ]);
    }
}
