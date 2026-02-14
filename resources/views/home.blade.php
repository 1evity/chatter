<x-layout>
    <x-slot:title>
       home feed
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to <u>Chatter</u> 👋</h1>
                    <p class="mt-4 text-base-content/60">Read others chats, or go ahead and write your own!</p>
                </div>
            </div>
        </div>

        <h1 class="text-3xl font-semibold mt-8">Latest Chats</h1>
        <div class="space-y-4 mt-8">
            @forelse ($chats as $chat)
                <x-chat :chat="$chat"/>
            @empty
                <div class="hero py-12">
                    <div class="hero-content text-center">
                        <div>
                            <svg class="mx-auto h-12 w-12 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <p class="mt-4 text-base-content/60">No chats yet. Be the first to chat!</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
