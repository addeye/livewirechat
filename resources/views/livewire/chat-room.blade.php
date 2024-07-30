<div id="chatroom">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div id="sidebar">
        @foreach ($users as $item)
        <a href="">
            <span>{{ $item->name }}</span>
            <small>Online</small>
        </a>
        @endforeach
    </div>
    <div id="windowchat">
        <div id="chat">
            @foreach ($messages as $item)
            <div>
                <p class="fw-bold">{{ $item->message }}</p>
                <p>
                    <small>{{ $item->user->name }} - {{ $item->created_at->diffForHumans() }}</small>
                </p>
            </div>
            @endforeach
        </div>

        <div id="sendchat">
            <input type="text" wire:model="message">
            <button wire:click="sendMessage">Kirim</button>
        </div>
    </div>
</div>
