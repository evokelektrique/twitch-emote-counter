<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emote;

class Emotes extends Controller {
    protected $emote;

    public function __construct(Emote $emote) {
        $this->emote = $emote;
    }

    public function index(Request $request, int $limit) {
        return $this->emote::orderBy('usage', 'desc')->take($limit)->get();
    }
}
