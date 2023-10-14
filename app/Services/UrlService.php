<?php

namespace App\Services;

use App\Models\ShortenerLinks;

class UrlService
{
    public function store(array $UrlData): ShortenerLinks
    {
        $oldUrl = $UrlData['link'];
        $code = ShortenerLinks::generateCode().".yi";

        $url = ShortenerLinks::create([
            'url' => $oldUrl,
            'code' => $code,
        ]);

        return $url;
    }

    public function redirect(array $code)
    {
        $url = ShortenerLinks::where('code', $code);

        if(!$url){
            return redirect()->route("Home")->with("error", "URL not found");
        }
        return redirect($url->url);
    }

    public function getUrl()
    {
        $data = ShortenerLinks::latest()->get();

        return $data;
    }
}