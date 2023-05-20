<x-project-layout>
    <x-slot name="header">
        Create new task for {{ $project->name }}
    </x-slot>

    <div class="mt-8 bg-white dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg">
        <form action="{{ route('tasks.store', $project->id) }}" method="POST">
            @csrf
            <textarea name="name" class="w-full dark:bg-gray-900 rounded-md text-gray-200" rows="10" required autofocus></textarea>

            <div class="flex justify-end mt-5">
                <input type="submit" value="Create" class="dark:bg-gray-900 mb-5 p-4 rounded-md dark:text-gray-200 cursor-pointer">
            </div>
        </form>
    </div>
</x-project-layout>