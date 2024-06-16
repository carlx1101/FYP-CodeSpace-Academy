<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button wire:click="toggleCompletion" class="btn btn-outline-primary">
        {{ $completed ? 'Mark as Incomplete' : 'Mark as Complete' }}
    </button>
</div>
