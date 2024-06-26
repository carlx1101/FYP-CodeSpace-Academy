<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div>

        @if ($assessment)
            <form wire:submit.prevent="submit">
                <h4>{{ $assessment->question }}</h4>
                @foreach ($assessment->options as $option)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="selectedOption" id="option{{ $option->id }}" value="{{ $option->id }}">
                        <label class="form-check-label" for="option{{ $option->id }}">
                            {{ $option->option_text }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary mt-3">Submit Answer</button>
            </form>
            @if ($feedback)
                <div class="alert {{ $feedback == 'Correct Answer!' ? 'alert-success' : 'alert-danger' }} mt-3">
                    {{ $feedback }}
                </div>
            @endif
        @else
            <p>No assessment available for this lesson.</p>
        @endif
    </div>

</div>
