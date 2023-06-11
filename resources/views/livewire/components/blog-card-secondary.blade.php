<div class="flex items-start mt-2 py-3 sm:px-5 font-poppin rounded-lg">
    <h3 class="text-4xl text-gray-300 font-poppin">{{ $idNumber > 9 ? $idNumber+1 : '0'.$idNumber+1}}</h3>
    <div class="pl-5">
        <div class=" flex flex-wrap">
            @foreach($blog->categories as $category)
                <span class=" mr-1 mt-1 text-xs font-semibold text-blue-400 px-2 py-0.5 bg-blue-200/40 rounded-full">{{$category->name}}</span>
            @endforeach


        </div>
        <h5 class="pt-3 font-bold text-lg text-gray-600 ">{{$blog->title}}</h5>
        <div class="flex text-sm font-poppin pt-2 text-gray-500">
            <span class="pr-1">{{\Carbon\Carbon::create($blog->created_at)->toFormattedDateString()}}</span>
            <span>. {{$blog->time()}} min read</span>

        </div>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
