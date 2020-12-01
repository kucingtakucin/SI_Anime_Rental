<?php

namespace App\Http\Controllers\Anime;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Lumen\Application;

class AnimeController extends Controller
{
    /**
     * @return View|Application
     */
    public function index()
    {
        $animes = Anime::all();
        return view('Anime.index', compact('animes'));
    }

    /**
     * @return View|Application
     */
    public function create()
    {
        return view('');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Anime::create($request->all());
        return redirect()->route('anime.index');
    }

    /**
     * @param Anime $anime
     * @return View|Application
     */
    public function edit(Anime $anime)
    {
        return view('', compact('anime'));
    }

    /**
     * @param Request $request
     * @param Anime $anime
     * @return RedirectResponse
     */
    public function update(Request $request, Anime $anime): RedirectResponse
    {
        $anime->update($request->all());
        return redirect()->route('anime.index');
    }

    /**
     * @param Anime $anime
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Anime $anime): RedirectResponse
    {
        $anime->delete();
        return redirect()->route('anime.index');
    }
}
