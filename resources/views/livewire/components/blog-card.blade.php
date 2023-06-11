<a href="{{route('blog.show',['blog' => $blog->slug])}}" class="w-full">
    <div class=" w-full h-112  rounded-3xl mt-1 relative">
        <div class="w-full h-full absolute">
    
            <img src="{{asset('storage/'.$blog->cover)}}" class=" object-cover  w-full h-full rounded-3xl" alt="blog cover">
        </div>
        <div class=" absolute top-0 left-0 bg-gradient-to-b rounded-3xl from-transparent  via-gray-800/30 to-black/90 h-full w-full">
        </div>
        <div class="absolute w-full h-full flex-col justify-end px-7 py-7 flex  rounded-3xl top-0 left-0">
            <div class="">
                <p class="text-sm font-semibold text-gray-400 pb-1">{{$date}} </p>
                @if ($blog->categories)
                <div class=" flex flex-wrap">
                    @foreach ($blog->categories as $category)
            
                        <span class=" mr-1 mt-1 text-xs font-semibold text-gray-600 px-2 py-0.5 bg-gray-200/70 rounded-full">{{$category->name}}</span>        
                    @endforeach
                </div>
                @endif
                <h5 class="pt-3 font-bold text-gray-300 ">{{$blog->title}}</h5>
            </div>
        </div>
    </div>
</a>
