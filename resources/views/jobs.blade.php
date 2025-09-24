<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li class="text-white">
                <a href="/jobs/{{$job['id']}}" class="underline transition duration-175 ease-in-out hover:text-blue-300">
                    <strong>{{$job['title']}}</strong>: pays {{$job['salary']}} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
