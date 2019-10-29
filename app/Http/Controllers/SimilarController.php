<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SimilarController extends Controller
{
    public function show($id){
//        dd($this->getMovies($id));
        return view('similar_results', ['items' => $this->getMovies($id)]);
    }

    private function getMovies($id)
    {
        $client = new Client(["base_uri" => "https://tastedive.com"]);
        return json_decode($client->get("/api/similar", ["query" => ["q" => $id, "k" => "348729-MovieDat-2XPH9KRS", "info" => "1"]])->getBody())->Similar;
    }
}
