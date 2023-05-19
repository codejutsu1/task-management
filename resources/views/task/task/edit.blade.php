<x-project-layout>
    <x-slot name="header">
        {{ __('Edit Task') }}
    </x-slot>

    <div class="mt-8 bg-white dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg">
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $task->task_name }}" class="w-full dark:bg-gray-900 rounded-md text-gray-200" required>

            <div class="flex justify-end mt-5">
                <input type="submit" value="Update" class="dark:bg-gray-900 mb-5 p-4 rounded-md dark:text-gray-200 cursor-pointer">
            </div>
        </form>
    </div>
</x-project-layout>