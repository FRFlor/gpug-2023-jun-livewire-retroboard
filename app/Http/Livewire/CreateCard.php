<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateCard extends Component
{
    public function render()
    {
        return view('livewire.create-card');
    }

    public function createNewCard()
    {
        auth()->user()->cards()->create(['content' => '']);
        $this->emit('new-card-created');
    }
}
