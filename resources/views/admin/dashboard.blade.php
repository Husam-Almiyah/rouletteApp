<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Create Store Panel -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-2xl mb-4">{{ __('Create Store') }}</h3>
                    <form action="{{ route('store.create') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="store_name" :value="__('Store Name')" />
                            <x-text-input id="store_name" class="block mt-1 w-full" type="text" name="store_name" required />
                        </div>

                        <x-primary-button>
                            {{ __('Create') }}
                        </x-primary-button>
                    </form>
                </div>

                <!-- List of Stores Panel -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-2xl mb-4">{{ __('List of Stores') }}</h3>
                    <ul>
                        @foreach($users as $store)
                        <li class="mb-2">
                            <a href="{{ route('store.edit', $store->id) }}" class="text-blue-600 hover:underline">
                                {{ $store->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
