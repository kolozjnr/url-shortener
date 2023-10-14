<?php

namespace App\Http\Controllers;

use App\Services\UrlService;
use Illuminate\Http\Request;
use App\Models\ShortenerLinks;
use App\Http\Requests\UrlRequest;


class ShortenerLinksController extends Controller
{
    private $urlservices;

    public function __construct(UrlService $urlservices){
        //$this->client = new ShortenerLinks();
        $this->urlservices = $urlservices;
    }
  
    public function index()
    {
        //dd("hhhhhh");
        return view('app.index');
    }

    public function store(UrlRequest $request)
    {
        //dd("hhh");
        
        $this->urlservices->store($request->validated());
        return redirect()->route('app.index');
    }

    public function redirect($code){
        $data = $this->urlservices->redirect($code);
        //return view('app.index', compact('data'));
    }

    public function getUrl(){
       $data = $this->urlservices->getUrl();
       return view('app.index', compact('data'));
    }
}
