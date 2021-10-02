<?php 

namespace App\Domain\Api;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Domain\Quote;

class Quotes {
    public static function fetch($count) {
        $quoteData = Http::get("https://breaking-bad-quotes.herokuapp.com/v1/quotes/$count")->json();
        
        return collect($quoteData) -> map(function($quote) {
            return new Quote($quote["author"], $quote["quote"]);
        });
    }
}