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

    <div class="py-10 text-gray-200 text-center font-semibold">
        <p>Developed by DUNU DANIEL</p>
        <ul class="flex space-x-6 justify-center mt-2">
            <li>
                <a class="underline" href="mailto:danieldunu001@gmail.com" target="_blank">
                    Email
                </a>
            </li>
            <li>
                <a class="underline" href="https://twitter.com/danieldunu" target="_blank">
                    Twitter
                </a>
            </li>
            <li>
                <a class="underline" href="https://linkedin.com/in/daniel-dunu" target="_blank">
                    LinkedIn
                </a>
            <li>
                <a class="underline" href="https://github.com/codejutsu1" target="_blank">
                    Github
                </a>
            </li>
        </ul>
    </div>
</x-project-layout>
