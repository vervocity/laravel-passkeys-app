<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    this is the dashboard
                    <p class="mt-2 text-sm text-gray-500">User Agent: {{ request()->userAgent() }}</p>
                    <button
                        type="button"
                        class="mt-4 inline-flex items-center rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white hover:bg-gray-700"
                        onclick="window.location.replace('{{ route('dashboard', absolute: true) }}')"
                    >
                        Replace To Full Dashboard URL
                    </button>
                    <button
                        type="button"
                        class="mt-4 ml-2 inline-flex items-center rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-600"
                        onclick="window.location.replace('knapheideportal://open?url=https:%3a%2F%2Fpasskeys.vervo.city/dashboard')"
                    >
                        Open In App Deep Link
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
