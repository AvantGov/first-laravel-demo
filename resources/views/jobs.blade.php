<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <div class="flex flex-row flex-wrap justify-center flex-auto w-full h-full space-x-2 space-y-4">
        @foreach ($jobs as $job)
                <a href="/jobs/{{$job['id']}}" class="transition duration-175 ease-in-out px-4 py-4 border-2 border-white text-white w-full h-full text-left opacity-45 hover:bg-indigo-400 hover:opacity-100">
                    <strong class="text-lg hover:underline">{{$job['title']}}</strong>
                    <div class="text-grey-100 text-sm">{{$job->employer->employer_name}}</div>
                </a>
        @endforeach

        <div class="w-full h-full">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
