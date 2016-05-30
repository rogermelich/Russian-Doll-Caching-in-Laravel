<?php

namespace App\Http\Controllers;

use App\Card;

class CardsController extends Controller
{
    public function index()
    {
//        $cards = Card::all();
        $cards = Cache::rememberForever('cards',function(){
            return Card::witch('notes')->get();
        });
//        $cards = Card::with('notes')->get();

        return view('cards.index', compact('cards'));
    }
}
