<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ShortUrlService;

class ShortController extends Controller
{

    public function createShortUrl(Request $request, ShortUrlService $shortUrl){
        return $shortUrl->createShortUrl($request->all());
    }

    public function redirectUrl($code, ShortUrlService $shortUrl){
        $url = $shortUrl->redirectUrl($code);
        return redirect($url);

    }

    public function topOneHundredRequest(ShortUrlService $shortUrl){
        $data = $shortUrl->topOneHundredRequest();
        return response()->json($data);
    }


}
