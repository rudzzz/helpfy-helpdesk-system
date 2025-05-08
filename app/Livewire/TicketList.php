<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class TicketList extends Component
{
    use WithPagination;

    public $status = '';
    public $priority = '';

    public function updatedStatus()
    {
        $this->resetPage();
    }

    public function updatedPriority()
    {
        $this->resetPage();
    }

    public function render()
    {
        $ticketsQuery = Ticket::query();

        if ($this->status) {
            $ticketsQuery->where('status', $this->status);
        }

        if ($this->priority) {
            $ticketsQuery->where('priority', $this->priority);
        }

        $tickets = $ticketsQuery->latest()->paginate(10);

        return view('livewire.ticket-list', compact('tickets'));
    }
}
