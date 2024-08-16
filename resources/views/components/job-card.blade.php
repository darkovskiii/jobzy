@props(['job'])
{{-- <div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group"> --}}
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold">{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small"></x-tag>
            @endforeach
        </div>
        <x-employer-logo :width="42"></x-employer-logo>
        {{-- <img src="http://placehold.it/42/42" alt=""> --}}
    </div>
</x-panel>
{{-- </div> --}}
