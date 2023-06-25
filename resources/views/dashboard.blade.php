<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    @foreach($cars as $item)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3>Название: {{ $item->name }}</h3>
                        <h3>Марка: {{ $item->mark }}</h3>
                        <h3>Двигатель: {{ $item->engine }}</h3>
                        <h3>Дата: {{ $item->date }}</h3>
                        <h3>Цена: {{ $item->price }}</h3>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
