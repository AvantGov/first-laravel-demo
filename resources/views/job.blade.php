<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class=" text-white font-bold text-lg">{{ $job['title'] }}</h2>

    <p class="text-white">
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
