@props(['job'])
{{-- <div class="p-4 bg-white/5 rounded-xl flex gap-x-6  border border-transparent hover:border-blue-800 group"> --}}
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
        {{-- <img class="rounded-xl" src="http://picsum.photos/seed/{{ rand(0, 10000) }}/100/100" alt=""> --}}
    </div>

    <div class="flex-1 flex flex-col ">
        <a href="#" class="self-start text-sm text-grey-400">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag></x-tag>
        @endforeach
    </div>
</x-panel>
{{-- </div> --}}
