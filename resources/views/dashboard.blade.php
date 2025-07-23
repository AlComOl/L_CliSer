<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
          {{-- Enlace para REGISTRAR CLIENTE --}}
        <a href="{{ route('clientes.create') }}"
           class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight
                  hover:text-blue-600 dark:hover:text-blue-400 transition duration-150 ease-in-out
                  focus:outline-none focus:underline px-7">
            {{ __('REGISTRAR CLIENTE') }}
        </a>
        <a href="{{ route('clientes.crud')}}"
              class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight
                  hover:text-blue-600 dark:hover:text-blue-400 transition duration-150 ease-in-out
                  focus:outline-none focus:underline px-7">
            {{ __('TODOS LOS CLIENTES') }}
        </a>
        <a href="{{ route('clientes.servicio')}}"
              class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight
                  hover:text-blue-600 dark:hover:text-blue-400 transition duration-150 ease-in-out
                  focus:outline-none focus:underline px-7 ">
            {{ __('MOSTRAR SERVICIOS') }}
        </a>
         <a href="{{ route('servicios.create')}}"

              class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight
                  hover:text-blue-600 dark:hover:text-blue-400 transition duration-150 ease-in-out
                  focus:outline-none focus:underline px-7 ">
            {{ __('AÑADIR SERVICIOS') }}
        </a>
    </x-slot>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">¡Éxito!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            </span>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
