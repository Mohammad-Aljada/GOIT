<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meetings') }}
        </h2>
    </x-slot>
    <?php $meetings = \App\Models\Meetings::all(); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <x-MeetingsTable :meetings="$meetings"></x-MeetingsTable>
            </div>
        </div>
    </div>
</x-app-layout>
