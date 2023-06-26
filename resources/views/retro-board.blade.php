<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Retro Board</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Card 1 -->
            <div class="bg-white p-4 shadow rounded h-48 flex flex-col justify-between">
                <div class="h-100">
                    <p class="mb-1">Author: John Doe</p>
                    <p class="mb-4 overflow-scroll max-h-20">This is the content of card 1</p>
                </div>

                <div class="flex justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Vote
                    </button>
                    <span class="text-gray-600">Votes: <span class="font-bold">0</span></span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-4 shadow rounded">
                <p class="mb-1">Author: Jane Smith</p>
                <p class="mb-4">This is the content of card 2.</p>
                <div class="flex justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Vote
                    </button>
                    <span class="text-gray-600">Votes: <span class="font-bold">0</span></span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-4 shadow rounded">
                <p class="mb-1">Author: Robert Johnson</p>
                <p class="mb-4">This is the content of card 3.</p>
                <div class="flex justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Vote
                    </button>
                    <span class="text-gray-600">Votes: <span class="font-bold">0</span></span>
                </div>
            </div>

            <!-- Create Card -->
            <div
                class="bg-gray-200 p-4 rounded border-dashed border-2 border-gray-400 flex items-center justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 mr-2" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M14 9a1 1 0 0 1 2 0v3h3a1 1 0 0 1 0 2h-3v3a1 1 0 0 1-2 0v-3h-3a1 1 0 0 1 0-2h3V9zm-4-7a1 1 0 0 1 1 1v3h3a1 1 0 0 1 0 2h-3v3a1 1 0 0 1-2 0v-3H7a1 1 0 0 1 0-2h3V3a1 1 0 0 1 1-1z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 font-bold">Create New Card</span>
            </div>
        </div>
    </div>
</x-app-layout>

