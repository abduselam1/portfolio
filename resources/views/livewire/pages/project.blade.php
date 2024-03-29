<div class="w-full px-20 grid grid-cols-7 items-center py-5 mt-2 rounded-lg relative text-left">
    <div class=" col-span-2">
        <h3 class=" text-3xl font-bold text-gray-700">{{$project->name}}</h3>
        <h4 class="text-lg pt-2 font-semibold text-gray-700">{{$project->company}}</h4>
        <div class="text-gray-400 flex text-sm font-semibold">
            <span>{{$project->start_date}}<span class="px-2">-</span></span>
            @if ($project->end_date)
                <span>{{$project->end_date}}</span>
            @else
                <span>Present</span>             
            @endif
        </div>
    </div>
    <div class=" col-span-5">
        <span class="blog-style">
            {!! $project->description !!}
        </span>
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
