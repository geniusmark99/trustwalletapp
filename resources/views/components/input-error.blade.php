@props(['messages'])

@if ($messages)
    <ul class="input-error-style">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
