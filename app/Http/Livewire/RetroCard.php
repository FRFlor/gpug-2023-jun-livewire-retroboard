<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class RetroCard extends Component
{
    use AuthorizesRequests;

    public Card $card;
    public $isEditing = false;

    public function render()
    {
        return view('livewire.retro-card');
    }
}
