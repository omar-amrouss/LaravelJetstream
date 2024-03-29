<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Modification d'une tâche
    </h2>
    </x-slot>
    <div class="py-12">
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <x-validation-errors class="mb-4" />
    @if (session()->has('message'))
    <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
    {{ session('message') }}
    </div>
    @endif
    <form action="{{ route('tasks.update', $task->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mt-4">
    <x-label value="Titre" />
    <x-input class="block mt-1 w-full" type="text" id=title name="title" :value="old('title', $task->title)" placeholder="Titre de la tâche" required autofocus />
    </div>
    <div class="mt-4">
    <x-label value="Détail" />
    <textarea class="form-input rounded-md shadow-sm mt-1" style="width: 100%" id="detail" name="detail" placeholder="Détail de la tâche">{{ old('detail', $task->detail) }}</textarea>
    </div>
    <div class="block mt-4">
    <label class="flex items-center">
    <input type="checkbox" class="form-checkbox" id="state" name="state" @if(old('state', $task->state)) checked @endif>
    <span class="ml-2 text-sm text-gray-600">Tâche accomplie</span>
    </label>
    </div>
    <div class="flex items-center justify-end mt-4">
    <button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Envoyer
    </button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </x-app-layout>