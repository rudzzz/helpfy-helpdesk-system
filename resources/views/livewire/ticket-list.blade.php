<div class="space-y-4">
    <h1 class="text-3xl font-bold py-4">Tickets</h1>

    <div>
        <label for="status" class="block text-sm font-medium">Status</label>
        <select wire:model.lazy="status" id="status"
            class="mt-1 block w-full border-gray-300 rounded-md text-primaryDark">
            <option value="">All</option>
            <option value="open">Open</option>
            <option value="in_progress">In Progress</option>
            <option value="closed">Closed</option>
        </select>
    </div>

    <div>
        <label for="priority" class="block text-sm font-medium">Priority</label>
        <select wire:model.lazy="priority" id="priority"
            class="mt-1 block w-full border-gray-300 rounded-md text-primaryDark">
            <option value="">All</option>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
    </div>

    @foreach ($tickets as $ticket)
        <div class="p-4 bg-white shadow rounded text-primaryDark">
            <h2 class="text-lg font-semibold">{{ $ticket->title }}</h2>
            <p>{{ $ticket->description }}</p>

            <div class="flex gap-2 items-center text-sm text-white">
                <span @class([
                    'p-2 rounded font-medium',
                    'bg-green-700 text-green-200 ' => $ticket->status == 'open',
                    'bg-yellow-700 text-yellow-200 ' => $ticket->status == 'in_progress',
                    'bg-red-700 text-red-200 ' => $ticket->status == 'closed',
                ])>
                    {{ ucfirst($ticket->status) }}
                </span>

                <span @class([
                    'p-2 rounded font-medium',
                    'bg-blue-300 text-blue-800 ' => $ticket->priority == 'low',
                    'bg-orange-300 text-orange-800 ' => $ticket->priority == 'medium',
                    'bg-red-300 text-red-800 ' => $ticket->priority == 'high',
                ])>
                    {{ ucfirst($ticket->priority) }}
                </span>
            </div>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $tickets->links() }}
    </div>
</div>
