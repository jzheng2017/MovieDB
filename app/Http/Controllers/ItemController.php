<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($id)
    {
        return view('item_detail', ['item' => $this->getMovies($id)]);
    }

    private function getMovies($id)
    {
        $client = new Client(["base_uri" => "http://www.omdbapi.com"]);
        return json_decode($client->get("", ["query" => ["i" => $id, "apikey" => "b508a18a", "plot" => "full"]])->getBody());
    }
}
