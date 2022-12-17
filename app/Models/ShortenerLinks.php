<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\UrlRequest;

class ShortenerLinks extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'link'
    ];

    public function index()
    {
        $shortlinks = ShortenerLinks::latest()->get();

        //return view('app.index', compact('shortlinks'));
    }

    //store links into db
    public function store(UrlRequest $req){
        $input['link'] = $request->link;
        $input['code'] = str_random(6);
   
        ShortenerLinks::create($input);
  
        return redirect('generate-shorten-link')
             ->with('success', 'Shorten Link Generated Successfully!');

    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLink($code)
    {
        $find = ShortenerLinks::where('code', $code)->first();
   
        return redirect($find->link);
    }
}
