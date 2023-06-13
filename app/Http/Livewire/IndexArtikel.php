<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\artikel;

class IndexArtikel extends Component
{
    protected $listeners = [
        'IndexArtikel'
    ];
    public function render()
    {
        $art = artikel::orderBy('id','desc')->limit(1)->get();   
        return view('livewire.index-artikel',['art' => $art]);
    }
    public function IndexArtikel($artikel){

    }
}
