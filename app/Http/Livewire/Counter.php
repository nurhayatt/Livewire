<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $sayi=0;
    public function render()
    {
        return view('livewire.counter');
    }

    public function artir(){
        $this->sayi++;
    }
    public function azalt(){
        $this->sayi--;
    }
}