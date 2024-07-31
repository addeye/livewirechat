<div  x-data="chatAct">
    <div x-init="scrollKeepBottom()" id="chat">
        @foreach ($messages as $item)
        <div wire:key="{{ $item->id }}">
            <p class="fw-bold">{{ $item->message }}</p>
            <p>
                <small>{{ $item->user->name }} - {{ $item->created_at->diffForHumans() }}</small>
            </p>
        </div>
        @endforeach
    </div>
</div>

@script
<script>
    Alpine.data('chatAct', () => {
        return {
            scrollKeepBottom() {
                let chat = document.getElementById('chat');
                chat.scrollTop = chat.scrollHeight - chat.clientHeight;
                console.log("scroll running");
            },
        }
    });

    $wire.on('scroll-top', () => {
        let chat = document.getElementById('chat');
        let scrollHeight = chat.scrollHeight;
        chat.scrollTop = scrollHeight;
        // chat.scrollTop = chat.scrollHeight - chat.clientHeight;
        console.log("scroll auto running");
        // alert("oke");
    });
</script>
@endscript
