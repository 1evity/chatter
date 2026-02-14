<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to Chatter!</h1>
                    <p class="mt-4 text-base-content/60">This is your brand new Laravel application.</p>
                </div>
            </div>
        </div>
        @forelse ($chats as $chat)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{$chat->user ? $chat->user->name : 'Anonymous'}}</div>
                        <div class="mt-1">{{$chat->message}}</div>
                        <div class="text-sm text-gray-500 mt-2">{{$chat->created_at->diffForHumans()}}</div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No chats yet. Be the first to chat!</p>
        @endforelse
    </div>
</x-layout>
