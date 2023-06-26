<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Retro Board</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <livewire:create-card/>

        @foreach($cards as $card)
            <livewire:retro-card :card="$card" :wire:key="$card->id"/>
        @endforeach
    </div>
</div>
