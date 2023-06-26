<div class="bg-white p-4 shadow rounded h-48 flex flex-col justify-between">
    <header class="text-gray-600 flex gap-4">
        {{--        TODO: Only the owner of the card should be able to see these control buttons to edit/delete card --}}
        <button class="h-5 aspect-square hover:scale-110"
                aria-label="edit card">
            <x-heroicon-m-pencil-square/>
        </button>
        <button class="h-5 aspect-square hover:scale-110"
                aria-label="delete card">
            <x-heroicon-m-trash/>
        </button>
    </header>
    <div class="h-100">
        {{--        TODO: The author name should appear in the card --}}
        <p class="mb-1">Author: Author-Name-Comes-Here</p>
        @if($isEditing)
            <input aria-label="contents of card {{$card->id}}"
                   class="w-full"
                   type="text">
        @else
            {{--            TODO: The contents of the card should appear in the body --}}
            <p class="mb-4 overflow-scroll max-h-20">Card-content-comes-here</p>
        @endif
    </div>
    <div class="flex justify-between">
        {{--        TODO: The vote button should only appear for cards I don't own --}}
        {{--        TODO: Clicking on the Vote button should create a new Vote in the database  --}}
        <button
            class="bg-blue-500 hover:scale-105 select-none hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Vote
        </button>

        {{--         TODO: Display the total amount of votes --}}
        <p class="text-gray-600">Votes: <strong class="font-bold">??</strong></p>
    </div>
</div>
