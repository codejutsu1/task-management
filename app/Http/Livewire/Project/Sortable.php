<?php

namespace App\Http\Livewire\Project;

use App\Models\Task;
use Livewire\Component;

class Sortable extends Component
{
    public $tasks;
    public $project_id;

    public function updateTaskPriority($items)
    {
        foreach($items as $item)
        {
            Task::findOrFail($item['value'])->update(['priority' => $item['order']]);

            $this->project_id = Task::where('id', $item['value'])->value('project_id');
        }

        return redirect()->route('projects.show', $this->project_id)->with('message', 'Updated by order of priority');
    }

    public function render()
    {
        return view('livewire.project.sortable');
    }
}
