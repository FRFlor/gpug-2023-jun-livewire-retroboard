<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class RetroBoard extends Component
{
    public Collection $cards;
    protected $listeners = [
        'new-card-created' => 'loadCards',
        'delete-card' => 'deleteCard'
    ];

    public function mount()
    {
        $this->loadCards();
    }

    public function loadCards()
    {
        $this->cards = Card::query()->orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.retro-board');
    }

    public function deleteCard(Card $card)
    {
        $card->delete();
        $this->loadCards();
    }
}
