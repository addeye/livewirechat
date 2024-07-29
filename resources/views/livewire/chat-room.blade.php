<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div id="sidebar">
        <a href="">Adi</a>
        <a href="">Isna</a>
        <a href="">Novi</a>
    </div>
    <div id="chat">
        @foreach ($messages as $item)
        <p class="fw-bold">{{ $item->message }}</p>
        <p>
            <small>{{ $item->user->name }} - {{ $item->created_at->diffForHumans() }}</small>
        </p>
        @endforeach
    </div>

    <div id="sendchat">
        <input type="text" wire:model="message">
        <button wire:click="sendMessage">Kirim</button>
    </div>
</div>
