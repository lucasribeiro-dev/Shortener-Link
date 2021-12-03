<?php

namespace App\Service;

use App\Models\ShortUrl;

class ShortUrlService
{

    public function createShortUrl($arrayData){
        $shortUrl = new ShortUrl();
        $shortUrl->url = $arrayData['url'];
        $shortUrl->code = $arrayData['code'];
        $shortUrl->visted = 0;
        $shortUrl->save();
        return true;

    }
    public function redirectUrl($code){
        $url =  ShortUrl::where('code', $code)->first();
        $totalVisted = $url->visted + 1;
        ShortUrl::where('code', $code)->update(['visted'=> $totalVisted]);
        return $url->url;

    }

    public function topOneHundredRequest(){
        return ShortUrl::orderBy('visted')->take(100)->get();
    }


}
