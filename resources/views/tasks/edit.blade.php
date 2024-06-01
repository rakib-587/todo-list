<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-700">Title</label>
                            <input type="text" name="title" value="{{ $task->title }}" class="w-full p-2 border rounded" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Description</label>
                            <textarea name="description" class="w-full p-2 border rounded">{{ $task->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Due Date</label>
                            <input type="date" name="due_date" value="{{ $task->due_date }}" class="w-full p-2 border rounded" required>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Update Task
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
