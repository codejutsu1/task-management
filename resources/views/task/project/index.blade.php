<x-project-layout>
    <x-slot name="header">
        {{ __('My projects') }}
    </x-slot>

    <div class="mt-8 bg-white dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg">
        <div>
            <a href="{{ route('projects.create') }}" class="inline-block dark:bg-gray-900 mb-5 p-4 rounded-md dark:text-gray-200">Create New Project</a>
        </div>

        <x-dropdown>
            <x-slot name="trigger">
                <button class="w-full dark:bg-gray-500 p-4 flex justify-between items-center rounded-md" type="button">
                    <h1 class="text-xl font-semibold dark:text-zinc-900">Your projects...</h1>
                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </x-slot>

            <x-slot name="content">
                <div>
                    <ul class="rounded-md w-full p-2 font-semibold dark:text-gray-200">
                        @foreach($projects as $project)
                        <li>
                            <a href="{{ route('projects.show', $project->id) }}" class="block px-2 py-4 hover:bg-gray-800 transition ease-in-out duration-200">
                                {{ $project->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </x-slot>
        </x-dropdown>
    </div>
</x-project-layout>