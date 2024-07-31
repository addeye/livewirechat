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
        @livewire('chat-space')

        <form wire:submit="sendMessage" id="sendchat">
            <input type="text" wire:model="message">
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>

@script
<script>
    console.log("Hello World!");
    $wire.on('ShowMessageChat', () => {
        alert("oke");
    });

</script>
@endscript
