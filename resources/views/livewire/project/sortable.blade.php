<div>
    <ul class="py-4 space-y-8" wire:sortable="updateTaskPriority">
        @foreach($tasks as $task)
        <li wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" class="flex justify-between dark:bg-zinc-400 p-3 rounded-md items-center">
            <div class="py-8 px-4" wire:sortable.handle>
                <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/resize-four-directions.png" alt="resize-four-directions"/>
            </div>
            <div class="w-3/5 py-8">
                <p>{{ $task->task_name }}</p>
            </div>
            <span class="flex flex-col items-center">
                <a href="{{ route('tasks.edit', $task->id) }}" class="inline-block dark:bg-green-900 mb-3 p-2 rounded-md dark:text-gray-200">
                    Edit Task
                </a>

                <form action="{{ route('tasks.destroy', $task->id) }}"  method="POST">
                    @method('DELETE')
                    @csrf

                    <input type="submit" class="inline-block bg-red-600 mb-3 p-2 rounded-md dark:text-gray-200" value="Delete Task" onclick="return confirm('Are you sure you want to delete this project?')">
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</div>
