<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        $attributes = request()->validate([
            'email' => 'required|email'
        ]);
        
        try {
        
            $newsletter->subscribe($attributes['email']);
            return redirect('/')->with('success', 'Email cadastrado com sucesso na nossa NewsLetter!');
        
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $decoded = json_decode($responseBodyAsString);

            return redirect('/')->with('success', $decoded->detail);
        }
    }
}