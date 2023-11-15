<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Counter extends Component
{

    public $filmid = -1;
    public $like = -1;

    public function mount() {
        $this->like = Auth::user()->films->contains($this->filmid);
    }

    public function pqlike(){
        if ($this->like) {
            Auth::user()->films()->detach($this->filmid);
            $this->like = false;
        } else {
            Auth::user()->films()->attach($this->filmid);
            $this->like = true;
        }
    }

    public function render()
    {
        return view('livewire.counter')->with('like', $this->like)->with('filmid', $this->filmid);
    }
}
