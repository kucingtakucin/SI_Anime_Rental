<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use JsonException;
use Laravel\Lumen\Application;

class GenresController extends Controller
{
    /**
     * @return View|Application
     */
    public function index()
    {
        $data = [
            "genres" => [
                1 =>'Action', 2 => 'Adventure', 3 => 'Cars', 4 => 'Comedy', 5 => 'Dementia', 6 => 'Demons',
                7 => 'Mystery', 8 => 'Drama', 9 =>'Ecchi', 10 => 'Fantasy', 11 => 'Game', 13 => 'Historical',
                14 => 'Horror', 15 => 'Kids', 16 => 'Magic', 17 => 'Martial Arts', 18 => 'Mecha', 19 => 'Music',
                20 => 'Parody', 21 =>'Samurai', 22 => 'Romance', 23 => 'School', 24 => 'Sci-fi', 25 => 'Shoujo',
                26 => 'Shoujo Ai', 27 => 'Shounen', 28 => "Shounen Ai", 29 => 'Space', 30 => 'Sports', 31 => 'Super Power',
                32 =>'Vampire', 35 => 'Harem', 36 => 'Slice Of Life', 37 => 'Supernatural', 38 => 'Military', 39 => 'Police',
                40 => 'Psychological', 41 => 'Thriller', 42 => 'Seinen',
            ],
        "count" => []
        ];
        foreach ($data['genres'] as $number => $genre) {
            $data["count"][$number] = $this->getGenre("https://api.jikan.moe/v3/genre/anime/$number")['item_count'];
        }
        return view('Genres.index', $data);
    }

    /**
     * @param string $url
     * @return mixed
     */
    public function getGenre(string $url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        try {
            return json_decode($result, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            die($e->getMessage());
        }
    }
}
