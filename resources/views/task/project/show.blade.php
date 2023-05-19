<x-project-layout>
    <x-slot name="header">
        {{ $project->name }}
    </x-slot>

    <div class="mt-8 bg-white dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg">
        <div class="flex justify-between">
            <a href="{{ route('projects.edit', $project->id) }}" class="inline-block dark:bg-green-900 mb-5 p-4 rounded-md dark:text-gray-200">
                Edit Project
            </a>

            <form action="{{ route('projects.destroy', $project->id) }}"  method="POST">
                @method('DELETE')
                @csrf

                <input type="submit" class="inline-block bg-red-600 mb-5 p-4 rounded-md dark:text-gray-200" value="Delete Project" onclick="return confirm('Are you sure you want to delete this project?')">
            </form>
        </div>

          <div class="dark:bg-gray-900 p-4">
            <h1 class="text-center text-xl text-gray-100">Task</h1>
            <a href="{{ route('tasks.create', $project->id) }}" class="inline-block dark:bg-zinc-500 mb-5 p-4 rounded-md dark:text-gray-300">
                Create New Task
            </a>
            <ul class="py-4 space-y-8">
                @foreach($tasks as $task)
                <li class="flex justify-between dark:bg-zinc-400 p-3 rounded-md items-center">
                    <p class="w-3/5">{{ $task->task_name }}</p>
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
    </div>
</x-project-layout>