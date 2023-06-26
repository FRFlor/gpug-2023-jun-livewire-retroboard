<div class="bg-white p-4 shadow rounded h-48 flex flex-col justify-between">
    @if(auth()->user()->can('update', $card))
        <header class="text-gray-600 flex gap-4">
            <button class="h-5 aspect-square hover:scale-110"
                    aria-label="edit card"
                    wire:click="toggleEditMode">
                <x-heroicon-m-pencil-square/>
            </button>
            <button class="h-5 aspect-square hover:scale-110"
                    aria-label="delete card"
                    wire:click="deleteMe">
                <x-heroicon-m-trash/>
            </button>
        </header>
    @endif
    <div class="h-100">
        <p class="mb-1">Author: {{$card->user->name}}</p>
        @if($isEditing)
            <input aria-label="contents of card {{$card->id}}"
                   class="w-full"
                   type="text"
                   wire:keydown.ENTER="toggleEditMode"
                   wire:model="card.content">
        @else
            <p class="mb-4 overflow-scroll max-h-20">{{$card->content}}</p>
        @endif
    </div>
    <div class="flex justify-between">
        @if(auth()->user()->can('vote', $card))
            <button
                wire:click="vote"
                class="bg-blue-500 hover:scale-105 select-none hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Vote
            </button>
        @endif

        <p class="text-gray-600">Votes: <strong class="font-bold">{{$card->vote_count}}</strong></p>
    </div>
</div>
