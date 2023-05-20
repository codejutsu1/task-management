<x-project-layout>
    <x-slot name="header">
        {{ $project->name }}
    </x-slot>

    <div class="mt-8 bg-white dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg">
        @if(session()->has('message'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Successful</p>
                <p>{{ session('message') }}</p>
            </div>     
        @endif 

        <div class="flex justify-between">
            <a href="{{ route('projects.edit', $project->id) }}" class="inline-block dark:bg-green-900 mb-5 p-4 rounded-md dark:text-gray-200">
                Edit Project
            </a>

            <a href="{{ route('assignment.index') }}" class="inline-block dark:bg-green-900 mb-5 p-4 rounded-md dark:text-gray-200">
                Home
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
            <livewire:project.sortable :tasks="$tasks" />
          </div>
    </div>
</x-project-layout>