<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class TicketList extends Component
{
    use WithPagination;

    public $status = '';
    public $priority = '';
    public $search = '';
    public $categories;
    public $category_id;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        $tickets = Ticket::with('category')
            ->when($this->search, function($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->when($this->status, function ($query) {
                $query->where('status', $this->status);
            })
            ->when($this->priority, function ($query) {
                $query->where('priority', $this->priority);
            })
            ->when($this->category_id, function ($query) {
                $query->where('category_id', $this->category_id);
            })
        ->paginate(10);

        return view('livewire.ticket-list', compact('tickets'));
    }

    public function resetFilters()
    {
        $this->reset(['search', 'status', 'priority', 'category_id',]);
    }
}
