<?php

namespace App\Http\Livewire\Project;

use App\Models\Task;
use Livewire\Component;

class Sortable extends Component
{
    public $tasks;

    public function updateTaskPriority($items)
    {
        foreach($items as $item)
        {
            Task::findOrFail($item['value'])->update(['priority' => $item['order']]);
        }

        $this->dispatchBrowserEvent('updated', ['message' => 'Updated by order of priority']);
    }

    public function render()
    {
        return view('livewire.project.sortable');
    }
}
