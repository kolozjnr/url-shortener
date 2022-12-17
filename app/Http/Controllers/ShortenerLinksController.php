<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortenerLinks;

class ShortenerLinksController extends Controller
{
  
    public function index():Collection
    {
        return view('app.index',['shortlinks' => $this->client->index()]);
    }
}
