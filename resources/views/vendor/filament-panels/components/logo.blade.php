<div class="flex flex-col">
    @if(auth()->check())
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <p class="text-xs">Today is {{ now()->format('l, F j, Y') }} and the current time is {{ now()->format('g:i A') }}</p>
    @endif
</div>