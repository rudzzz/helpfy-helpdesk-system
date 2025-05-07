<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class TicketList extends Component
{
    public function render()
    {
        $tickets = Ticket::latest()->get();

        return view('livewire.ticket-list', compact('tickets'));
    }
}
