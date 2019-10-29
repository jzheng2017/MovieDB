<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use function GuzzleHttp\Promise\queue;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);
        return view('search_result', ['items' => $this->getMovies($request->get('query'))]);
    }

    private function getMovies($query)
    {
        $client = new Client(["base_uri" => "http://www.omdbapi.com"]);
        return json_decode($client->get("", ["query" => ["s" => $query, "apikey" => "b508a18a"]])->getBody())->Search;
    }
}
