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
        @foreach ($chats as $chat)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{$chat['author']}}</div>
                        <div class="mt-1">{{$chat['message']}}</div>
                        <div class="text-sm text-gray-500 mt-2">{{$chat['time']}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
