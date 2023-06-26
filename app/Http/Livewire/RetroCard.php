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

    public $rules = [
        'card.content' => 'string'
    ];

    public function render()
    {
        return view('livewire.retro-card');
    }

    public function updated($nameOfAttribute, $valueOfAttribute)
    {
        $this->authorize('update', $this->card);
        $this->card->update([$nameOfAttribute => $valueOfAttribute]);
    }

    public function vote()
    {
        $this->authorize('vote', $this->card);
        auth()->user()->voteFor($this->card);
    }

    public function deleteMe()
    {
        $this->emit('delete-card', $this->card);
    }

    public function toggleEditMode()
    {
        $this->isEditing = ! $this->isEditing;
    }
}
