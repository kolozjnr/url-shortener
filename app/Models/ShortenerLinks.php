<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Http\Requests\UrlRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShortenerLinks extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'url'
    ];

    
    public static function generateCode(int $length = 6)
    {
        return Str::random($length);
    }
    // public function index()
    // {
    //     $shortlinks = ShortenerLinks::latest()->get();

    //     //return view('app.index', compact('shortlinks'));
    // }

    //store links into db
    // public function store(UrlRequest $req){
    //     $input['link'] = $request->link;
    //     $input['code'] = str_random(6);
   
    //     ShortenerLinks::create($input);
  
    //     return redirect('generate-shorten-link')
    //          ->with('success', 'Shorten Link Generated Successfully!');

    // }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function shortenLink($code)
    // {
    //     $find = ShortenerLinks::where('code', $code)->first();
   
    //     return redirect($find->link);
    // }
}
