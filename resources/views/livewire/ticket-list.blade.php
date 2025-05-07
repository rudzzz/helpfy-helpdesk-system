<div class="space-y-4">
    <h1 class="text-3xl font-bold py-4">Tickets</h1>

    @foreach ($tickets as $ticket)
        <div class="p-4 bg-white shadow rounded text-primaryDark">
            <h2 class="text-lg font-semibold">{{ $ticket->title }}</h2>
            <p>{{ $ticket->description }}</p>
            <span class="text-sm">{{ $ticket->status }}</span>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $tickets->links() }}
    </div>
</div>
