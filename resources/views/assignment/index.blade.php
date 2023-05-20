 <x-project-layout>
    <x-slot name="header">
        {{ __('Task Management') }}
    </x-slot>

    <div class="mt-8 bg-white flex justify-between dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg">
        <div>
            <a href="{{ route('projects.create') }}" class="inline-block dark:bg-gray-900 mb-5 p-4 rounded-md dark:text-gray-200">Create New Project</a>
        </div>

        <div>
            <a href="{{ route('projects.index') }}" class="inline-block dark:bg-gray-900 mb-5 p-4 rounded-md dark:text-gray-200">My Projects</a>
        </div>
    </div>
</x-project-layout>
